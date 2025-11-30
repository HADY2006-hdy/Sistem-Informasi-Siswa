📘 SISTEM INFORMASI SISWA — Web Akademik Sekolah

Sistem Informasi Siswa adalah aplikasi berbasis Laravel yang dirancang untuk membantu sekolah mengelola data siswa, guru, kelas, mata pelajaran, jadwal, dan nilai secara terstruktur.

Tujuan aplikasi ini: bikin pengelolaan data akademik lebih cepat, lebih rapi, dan lebih efisien dengan tampilan modern dan fitur manajemen lengkap.

✨ Fitur Utama

🧑‍🎓 Manajemen Siswa (tambah, edit, hapus, lihat detail)

👨‍🏫 Manajemen Guru

🏫 Manajemen Kelas

📚 Manajemen Mata Pelajaran

📅 Manajemen Jadwal Pelajaran

📄 Input & Lihat Nilai Raport

🔐 Autentikasi Admin & Role User

🌙 Tema Dark Mode & Light Mode

📊 Dashboard Statistik (jumlah siswa per kelas, statistik gender, dsb)

🧰 Teknologi yang Digunakan

Laravel 10+

PHP 8.2+

MySQL / MariaDB

Blade Template

Bootstrap 5

Composer

XAMPP / Laragon / WAMP

🛠 Cara Clone & Menjalankan Sistem Informasi Siswa (Langkah Demi Langkah)
1️⃣ Install Git

Git dipakai untuk meng-clone source code dari GitHub.

Download Git
👉 https://git-scm.com/downloads

Install Git seperti aplikasi biasa.

Cek instalasi:

git --version


Kalau muncul versi, berarti berhasil.

2️⃣ Install Composer

Composer digunakan untuk menginstall dependency Laravel.

Download di sini:
👉 https://getcomposer.org/download/

Setelah terinstall, cek:

composer --version

3️⃣ Install XAMPP / MySQL Server

Karena aplikasi ini membutuhkan database MySQL.

Download XAMPP:
👉 https://www.apachefriends.org/

Nyalakan:

✔ Apache
✔ MySQL

4️⃣ Clone Repository Sistem Informasi Siswa

Pilih folder di laptop kamu, misalnya:

C:\Users\ASUS\Documents\Project-Sekolah


Clone repository:

git clone https://github.com/HADY2006-hdy/Sistem-Informasi-Siswa.git


Masuk ke folder project:

cd Sistem-Informasi-Siswa

5️⃣ Install Dependency Laravel

Masih di dalam folder project:

composer install


Lalu buat file .env:

cp .env.example .env


Generate application key:

php artisan key:generate

6️⃣ Setting Database

Buka phpMyAdmin

Buat database baru, misalnya:

db_siswa


Buka file .env lalu ubah:

DB_DATABASE=db_siswa
DB_USERNAME=root
DB_PASSWORD=


(Sesuaikan kalau kamu pakai password di MySQL)

7️⃣ Migrasi Database + Seeder

Jalankan:

php artisan migrate --seed


Seeder akan otomatis mengisi data awal seperti admin default.

8️⃣ Jalankan Aplikasi

Masih di dalam folder project:

php artisan serve


Aplikasi bisa dibuka lewat browser:

http://127.0.0.1:8000

9️⃣ Login Akun Admin (Default)

Gunakan akun berikut:

Email: admin@gmail.com

Password: 12345678

(Setara dengan versi open-source yang kamu modifikasi tadi)

🔧 Perintah Tambahan Kalau Error

Jika muncul error atau perubahan tidak tampil:

php artisan optimize:clear
php artisan migrate:fresh --seed
php artisan serve


Jika ada masalah caching:

php artisan config:clear
php artisan cache:clear

📂 Struktur Folder
Sistem-Informasi-Siswa/
├── app/
├── bootstrap/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── views/
│   └── css/js assets
├── routes/
│   └── web.php
├── .env
├── composer.json
└── README.md

👨‍💻 Kontributor

Developer Utama:

Hadynata Yusuf Pratama

Support & Kontributor:

Reiner Dominicus Sakunab

Melin Oktaviani

📜 Lisensi (Opsional)

MIT License
Proyek bebas digunakan untuk pembelajaran & pengembangan.
