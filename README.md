## 🔗 Live Preview
<a href="https://your-live-link.com" target="_blank">
  <img src="https://img.shields.io/badge/Live%20Preview-8A2BE2?style=for-the-badge&logo=google-chrome&logoColor=white" alt="Live Preview" style="height:50px;">
</a>
## 📚 Laravel Book Store Web App

A modern and responsive web-based Book Store built with Laravel. This application allows users to browse, search, and manage books with ease. Ideal for small libraries, book businesses, or educational purposes.

---

## 🚀 Features

- User-friendly interface with responsive design  
- Book listing with categories, authors, and pricing  
- Add, edit, delete books (CRUD)  
- Search and filter functionality  
- Authentication system using Laravel Breeze  
- Admin panel for managing content

---

## 🛠️ Tech Stack

- **Framework:** Laravel  
- **Frontend:** Blade, Bootstrap, jQuery  
- **Database:** MySQL  
- **Authentication:** Laravel Breeze  
- **Others:** XAMPP, Git, VS Code / Notepad++

---

## 💾 Installation Guide

Follow these steps to set up the project on your local machine:

### 1. Clone the Repository

```bash
git clone https://github.com/kundansahil/laravel-book-store-website.git
```

Or simply [Download ZIP](https://github.com/kundansahil/laravel-book-store-website/archive/refs/heads/main.zip) and extract it.

### 2. Move to the Project Directory

```bash
cd laravel-book-store-website
```

### 3. Copy `.env` File

```bash
cp .env.example .env
```

### 4. Install Dependencies

```bash
composer install
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Configure `.env` File

Update the following lines in your `.env` file to match your local environment:

```env
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=
```

Then create a database in **phpMyAdmin** with the same name.

### 7. Run Migrations (Create Tables)

```bash
php artisan migrate
```

### 8. Start the Development Server

```bash
php artisan serve
```

Now open your browser and go to:

```
http://localhost:8000
```

---

## ✅ Default Login (if any)

You can register a new user or set up a seed user for admin access if needed.

---

## 🤝 Contributing

If you'd like to improve or add new features, feel free to fork the repo and create a pull request!

---

## 📩 Contact

**Developer:** Kundan Sahil  
**Email:** sahilkundan85@gmail.com  
**GitHub:** [@kundansahil](https://github.com/kundansahil)

---

> Made with ❤️ by Kundan Sahil