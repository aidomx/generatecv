# GenerateCV

Aplikasi sederhana berbasis **Laravel** untuk membuat Curriculum Vitae (CV) secara cepat.
Pengguna dapat mengisi data pribadi, pendidikan, pengalaman, dan skill, lalu mengunduh CV dalam format PDF.

---

## ✨ Fitur

- Form input data CV (nama, email, telepon, pendidikan, pengalaman, skill).
- Preview hasil sebelum diunduh.
- Export CV ke PDF dengan template sederhana.
- Landing page minimalis dengan TailwindCSS.

---

## 🚀 Instalasi

### 1. Clone repository

```bash
git clone https://github.com/aidomx/generatecv.git
cd generatecv
```

### 2. Install dependencies

```bash
composer install
npm install && npm run dev
```

### 3. Konfigurasi environment

Copy file `.env.example` lalu ubah menjadi `.env`:

```bash
cp .env.example .env
```

Generate key aplikasi:

```bash
php artisan key:generate
```

Atur koneksi database di file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=generatecv
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Migrasi database

```bash
php artisan migrate
```

### 5. Jalankan server

```bash
php artisan serve
```

Akses aplikasi di:
👉 `http://localhost:8000`

---

## 📂 Struktur Fitur

- **Landing Page** → `welcome.blade.php` (mengarah ke form CV).
- **Formulir CV** → `/resume/create`.
- **Preview CV** → `/resume/{id}`.
- **Download PDF** → `/resume/{id}/download`.

---

## 📦 Teknologi

- [Laravel 12](https://laravel.com/)
- [Tailwind CSS](https://tailwindcss.com/)
- [DOMPDF (barryvdh/laravel-dompdf)](https://github.com/barryvdh/laravel-dompdf)

---

## 📝 Lisensi

Proyek ini bebas digunakan untuk keperluan pribadi maupun pembelajaran.
