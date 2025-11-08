# EduFun Web Application

EduFun adalah aplikasi web edukasi berbasis Laravel yang menyediakan materi IT gratis untuk mahasiswa. Dengan berfokus pada berbagai kategori bidang studi, termasuk **Data Science**, **Network Security**, **Interactive Multimedia**, dan **Software Engineering**, EduFun dirancang untuk membantu mahasiswa mengakses materi secara mudah dan terstruktur berdasarkan ketentuan NIM mereka.

## Fitur Utama

- **Home Page**: Menampilkan artikel terbaru dengan gambar dan tautan "read more" untuk melihat detail.
- **Category Page**: Menyediakan pilihan kategori mata kuliah sesuai bidang yang ditentukan.
- **Detail Page**: Menyajikan informasi lengkap tentang materi tertentu, termasuk judul, konten, tanggal posting, dan nama penulis.
- **Writers Page**: Menampilkan daftar penulis yang berkontribusi dalam artikel, beserta tautan ke materi yang mereka tulis.
- **About Us Page**: Memberikan informasi mengenai tujuan dan misi platform EduFun.

### Fitur Opsional (Challenges)

- **Popular Page**: Menampilkan artikel yang populer di kalangan pengguna, dengan pagination untuk navigasi dua halaman.

## Teknologi yang Digunakan

- **Backend**: [Laravel 11](https://laravel.com/docs/11.x) - Framework PHP modern untuk aplikasi web.
- **Frontend**: [Bootstrap 5.2](https://getbootstrap.com/docs/5.2/) - Framework CSS responsif.
- **Database**: [MySQL](https://www.mysql.com/) (dikelola dengan phpMyAdmin) - Sistem manajemen basis data relasional.

## Instalasi dan Penggunaan

### Prasyarat
- PHP >= 8.0
- Composer
- MySQL
- Git

### Langkah-langkah Instalasi

1. **Clone repository**:
   ```bash
   git clone https://github.com/username/EduFun.git
   cd EduFun
   ```

2. **Instalasi dependencies**:
   Jalankan perintah berikut untuk menginstal semua package Laravel yang dibutuhkan:
   ```bash
   composer install
   ```

3. **Konfigurasi environment**:
   Salin file `.env.example` ke `.env` dan sesuaikan pengaturan database Anda:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Migrasi dan seeding database**:
   Jalankan migration dan seeder untuk menyiapkan struktur dan data awal pada database:
   ```bash
   php artisan migrate --seed
   ```

5. **Menjalankan server**:
   Setelah setup selesai, jalankan server Laravel:
   ```bash
   php artisan serve
   ```
   Akses aplikasi pada `http://localhost:8000`.

## Struktur Proyek

```plaintext
EduFun/
├── app/            # Logika aplikasi
├── bootstrap/      # Bootstrap file
├── config/         # Konfigurasi aplikasi
├── database/       # Migrasi dan seeder
├── public/         # Direktori publik untuk assets
├── resources/      # Views dan assets front-end
├── routes/         # File routing aplikasi
└── ...
```
