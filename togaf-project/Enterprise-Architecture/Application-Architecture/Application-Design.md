# Application Design

## Overview
The application is a developer portfolio built using PHP, Node.js, and Tailwind CSS. It is containerized using Docker for consistent deployment.

## Components
1. **Frontend**:
   - Built with Tailwind CSS for styling.
   - Includes pages for Home, About, Portfolio, and Contact.

2. **Backend**:
   - PHP 8.4 is used for dynamic content rendering and form handling.

3. **Build System**:
   - Node.js is used to compile Tailwind CSS into production-ready CSS.

4. **Deployment**:
   - Docker is used to containerize the application, with separate containers for PHP, Node.js, and Nginx.

## Interaction Flow
1. Users access the portfolio through a web browser.
2. Nginx serves the PHP pages and static assets.
3. PHP dynamically renders content based on user interactions.
4. Tailwind CSS ensures a responsive and interactive UI.