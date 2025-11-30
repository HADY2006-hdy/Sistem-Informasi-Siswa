Sistem Informasi Siswa 

Aplikasi Sistem Informasi Siswa berbasis Laravel 12 yang dirancang untuk membantu sekolah dalam mengelola data siswa secara cepat, modern, dan efisien.

Sistem ini dibangun untuk memberikan pengalaman penggunaan yang nyaman, tampilan elegan, serta fitur manajemen data siswa yang stabil dan mudah digunakan oleh admin maupun pengguna biasa.

✨ Fitur Utama
👨‍🏫 Manajemen Data Siswa (CRUD)

Tambah, edit, hapus, dan lihat data siswa

Atribut lengkap: Nama, NIS, Kelas, Gender, Alamat

Validasi otomatis saat input

Pencarian siswa berdasarkan nama

🔐 Autentikasi Aman (Login/Logout)

Role Admin (full akses CRUD)

Role User (hanya melihat data)

Session-based authentication Laravel

📊 Dashboard Statistik Modern

Statistik jumlah siswa berdasarkan gender

Statistik jumlah siswa berdasarkan kelas

Tampilan card interaktif

Layout modern berbasis Bootstrap & Icons

🌙 Mode Terang & Gelap

Light mode untuk tampilan cerah

Dark mode elegan untuk penggunaan malam

Mode tersimpan otomatis menggunakan session

🎨 UI Modern & Clean

Menggunakan Bootstrap 5

Sidebar elegan & responsif

Desain bersih, rapi, dan mudah digunakan

📁 Teknologi yang Digunakan
Teknologi	Keterangan
Laravel 12	Framework utama
PHP 8.x	Bahasa pemrograman
MySQL / MariaDB	Database
Bootstrap 5	UI Framework
Blade Template Engine	Sistem templating Laravel
Chart.js (opsional)	Grafik data
🔧 Instalasi & Menjalankan Project

Ikuti langkah berikut untuk meng-clone dan menjalankan project secara lokal.

1️⃣ Clone Repository
git clone https://github.com/USERNAME/Sistem-Informasi-Siswa.git

2️⃣ Masuk ke Folder Project
cd Sistem-Informasi-Siswa

3️⃣ Install Semua Dependency Laravel
composer install

4️⃣ Buat File .env
cp .env.example .env


Lalu buka file .env dan sesuaikan bagian database:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_siswa
DB_USERNAME=root
DB_PASSWORD=

5️⃣ Generate Key Laravel
php artisan key:generate

6️⃣ Migrasi Database
php artisan migrate


Jika ingin sekaligus menambahkan akun awal:

php artisan db:seed

7️⃣ Jalankan Server
php artisan serve


Akses melalui browser:
👉 http://127.0.0.1:8000

📂 Struktur Folder
Sistem-Informasi-Siswa/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── SiswaController.php
│   │   └── Middleware/
│   └── Models/
│       └── Siswa.php
├── public/
│   └── assets/
├── resources/
│   ├── views/
│   │   ├── layout.blade.php
│   │   ├── dashboard.blade.php
│   │   ├── profile.blade.php
│   │   └── siswa/
│   │       ├── index.blade.php
│   │       ├── create.blade.php
│   │       └── edit.blade.php
├── routes/
│   └── web.php
├── database/
│   └── migrations/
└── README.md

📸 Screenshot (Placeholder)

Tambahkan screenshot web kamu nanti di sini bro:

![Dashboard](assets/screenshots/dashboard.png)
![Data Siswa](assets/screenshots/data_siswa.png)
![Login Page](assets/screenshots/login.png)

👨‍💻 Developer
✨ Hadynata Yusuf Pratama

Sistem Informasi Siswa — Laravel 12
Universitas Tadulako | Teknik Informatika

“Membangun sistem sekolah yang modern, efisien, dan mudah digunakan adalah misi saya. Semoga project ini bermanfaat dan terus berkembang.”

📜 Lisensi

MIT License
Project ini bebas digunakan untuk pembelajaran dan pengembangan.
