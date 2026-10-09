# 🎓 Alborz University Courses Management System | سیستم مدیریت دوره‌های پوهنتون البرز

A lightweight, modern dynamic web application built with **Laravel 11/10** to manage and display university academic courses, departments,

این یک پروژه وب پویا و سبک با فریم‌ورک **لاراول** است که برای مدیریت و نمایش دوره‌های تخصصی، رشته‌ها و مقاطع تحصیلی پوهنتون البرز طراحی شده است.

---

## ✨ Features | قابلیت‌های کلیدی

- **Dynamic Course Rendering:** Fetches and displays courses dynamically from Controller data array (ready for Database migration).
- **Clean Blade Component Architecture:** Implements standard `@extends`, `@section`, and `@yield` layout patterns for UI consistency.
- **Responsive Layout:** Beautiful UI structure prepared for Tailwind CSS / Bootstrap integration.
- **Modern Routing:** Fully decoupled and clean Laravel Routing subsystem.

---

## 🛠️ Tech Stack | تکنولوژی‌های استفاده شده

- **Backend:** PHP >= 8.2 & Laravel Framework
- **Frontend:** Laravel Blade Templating Engine, HTML5, CSS3
- **Data Source:** Controller Array (Scalable to Eloquent MySQL/PostgreSQL Models)

---

## 🚀 Installation & Setup | راهنمایی نصب و اجرا

Follow these simple steps to run this project locally on your machine:

برای راه‌اندازی پروژه روی سیستم خود، مراحل زیر را به ترتیب اجرا کنید:

### 1. Clone the repository | کلون کردن مخزن

```bash
git clone https://github.com/MR-Mohammadi-sab/laravel.git
```

### 2. Install dependencies | نصب نیازمندی‌ها

```bash
composer install
npm install
```

### 3. Environment configuration | تنظیمات محیطی

Copy the `.env.example` file to `.env` and generate the application key:

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Serve the application | اجرای پروژه

Run the local development server:

```bash
php artisan serve
```
