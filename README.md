# ✨ TailResume

**TailResume** – Tailwind + Resume. Simple, clean.  
Crafted with ❤️ by **Bhupesh Kushwaha**

---

## 📄 Overview

**TailResume** is a lightweight, elegant resume and portfolio web app built using **PHP 8.4**, **Nginx**, **Tailwind CSS**, and optionally integrates with **Firebase**.  
It’s perfect for developers or creatives who want a fast, mobile-friendly online CV that’s easy to deploy and fully Dockerized for local development.

---

## 🚀 Features

- ⚡ Fast and responsive UI built with TailwindCSS
- 🐘 Backend-ready with PHP 8.4
- 🐳 Dockerized for hassle-free setup
- 🌐 Nginx as a lightweight web server
- 🔥 Optional Firebase support for authentication, hosting, or database
- 🧰 Modular and easy to customize

---

## 🧰 Tech Stack

- **PHP 8.4 (FPM)**
- **Nginx**
- **Tailwind CSS**
- **Node.js** (for Tailwind build)
- **Docker & Docker Compose**
- **Firebase** (Optional)

---

## 📁 Project Structure

```
resume-project/
├── docker/
│   ├── nginx/
│   │   └── default.conf
│   └── php/
│       └── Dockerfile
├── src/
│   ├── index.php
│   └── assets/
│       └── style.css (compiled Tailwind)
├── tailwind.config.js
├── package.json
├── postcss.config.js
├── docker-compose.yml
└── README.md
```

---

## 📦 Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/bhupeshdeveloper/tailresume.git
cd tailresume
```

### 2. Start Docker Containers

```bash
docker-compose up
```

Your app will be running at: [http://localhost:8080](http://localhost:8080)

### 3. Run Tailwind Compiler

In a separate terminal:

```bash
docker-compose run --rm tailwind
```

---

## 🔧 Customization

- Edit your resume in `src/index.php`
- Update Tailwind styling in `src/assets/input.css`
- Configure Tailwind in `tailwind.config.js`

### Build Optimized CSS Manually

```bash
npm run build
```

---

## 📜 License

MIT License © 2025 Bhupesh Kushwaha

---

## 🙌 Acknowledgements

- **TailwindCSS**
- **PHP**
- **Docker**

---

## 📬 Contact

- **Bhupesh Kushwaha**  
  - GitHub: [@bhupeshdeveloper](https://github.com/bhupeshdeveloper)  

---

Give it a ⭐ if you like it, and feel free to fork & personalize your own TailResume!
