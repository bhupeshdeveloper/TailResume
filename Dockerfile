# 1) Build Tailwind CSS
FROM node:18-alpine AS tailwind
WORKDIR /app

# copy package.json + install deps
COPY node/package*.json ./
RUN npm ci

# copy config & input, build CSS
COPY node/tailwind.config.js node/postcss.config.js node/input.css ./
RUN npx tailwindcss -i input.css -o dist/output.css --minify

# 2) Final image: PHP‑FPM + Nginx
FROM php:8.4-fpm-alpine

# install nginx (pulls in /etc/nginx/mime.types)
RUN apk add --no-cache nginx

# copy compiled CSS into your webroot
#COPY --from=tailwind /app/dist/output.css /var/www/html/assets/css/style.css

# copy your PHP app
COPY php/ /var/www/html/

# copy Nginx config
COPY nginx/nginx.conf /etc/nginx/nginx.conf
COPY nginx/conf.d/ /etc/nginx/conf.d/

# ensure log & run dirs exist
RUN mkdir -p /run/nginx

# expose port 80
EXPOSE 80

# start PHP‑FPM (background) and Nginx (foreground)
CMD ["sh","-c","php-fpm -D && nginx -g 'daemon off;'"]
