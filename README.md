📘 SISTEM INFORMASI SISWA — Web Akademik Sekolah

Sistem Informasi Siswa adalah aplikasi berbasis Laravel yang dirancang untuk membantu sekolah mengelola data siswa, guru, kelas, jadwal pelajaran, mata pelajaran, dan nilai rapor secara terstruktur.

Tujuan aplikasi ini: bikin pengelolaan data akademik lebih cepat, rapi, aman, serta efisien dengan tampilan modern dan fitur manajemen sekolah yang lengkap.

✨ Fitur Utama
👨‍🏫 Manajemen Siswa

Tambah, edit, hapus, dan lihat detail siswa

Statistik gender otomatis (Laki-laki & Perempuan)

Statistik jumlah siswa per kelas

👩‍🏫 Manajemen Guru

Tambah, edit, hapus, dan lihat data guru

Relasi guru ↔ mata pelajaran

🏫 Manajemen Kelas

Tambah, edit, hapus kelas

Menampilkan daftar siswa dalam setiap kelas

📚 Manajemen Mata Pelajaran

CRUD mata pelajaran

Relasi mapel ↔ guru ↔ kelas

🗓️ Manajemen Jadwal Pelajaran

Input jadwal pelajaran

Relasi dengan kelas, guru, dan mapel

📊 Dashboard Statistik

Statistik jumlah siswa berdasarkan gender

Statistik jumlah siswa per kelas

Menampilkan daftar siswa laki-laki & perempuan (fitur tambahan)

Menampilkan daftar siswa per kelas

🎨 UI Modern & Clean

Menggunakan Blade Template Laravel

Dark Mode Support

Tampilan dashboard modern dan responsif

🧰 Teknologi yang Digunakan
Teknologi	Keterangan
Laravel 10	Framework utama
PHP 8.2	Bahasa Pemrograman
MySQL / MariaDB	Database
Blade Template	View Engine
Bootstrap 5	UI Styling
Eloquent ORM	Manajemen data
Laravel Artisan	CLI Laravel
🛠 Cara Install & Clone Sistem Informasi Siswa (Lengkap Dari Nol)
1️⃣ Install Git

Download Git
👉 https://git-scm.com/downloads

Install seperti biasa

Cek apakah Git sudah terpasang:

git --version


Kalau muncul versi, berarti sukses.

2️⃣ Install PHP & Composer
Install PHP (versi minimal 8.1)

Download dari:
👉 https://windows.php.net/download/

Install Composer

https://getcomposer.org/download/

Cek composer:

composer --version

3️⃣ Install XAMPP / Laragon

Disarankan pakai XAMPP:

Download:
👉 https://www.apachefriends.org/

Aktifkan:

Apache

MySQL

4️⃣ Buat Database Baru

Buka phpMyAdmin

Buat database baru:

Nama database: db_siswa
(Terserah kamu, tapi sesuaikan dengan file .env nanti)

5️⃣ Clone Repository Sistem Informasi Siswa

Pilih folder untuk menyimpan project, lalu jalankan:

git clone https://github.com/HADY2006-hdy/Sistem-Informasi-Siswa.git


Masuk ke folder:

cd Sistem-Informasi-Siswa

6️⃣ Install Dependency Laravel

Jalankan:

composer install


Lanjutkan dengan meng-copy file environment:

cp .env.example .env

7️⃣ Konfigurasi File .env

Edit file .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_siswa
DB_USERNAME=root
DB_PASSWORD=


Sesuaikan DB_USERNAME & PASSWORD sesuai XAMPP kamu.

8️⃣ Generate Key Laravel
php artisan key:generate

9️⃣ Migrasi Database + Seeder (isi data awal)
php artisan migrate --seed


Seeder akan mengisi:

Admin default

Data sample guru

Data sample siswa (opsional)

🔟 Jalankan Server Laravel
php artisan serve


Akses web di:

👉 http://127.0.0.1:8000

👉 http://localhost:8000

👤 Akun Login Default
Admin
email: admin@gmail.com
password: 12345678

📂 Struktur Folder Project
Sistem-Informasi-Siswa/
├── app/                # Logic aplikasi
├── database/           # Migration & Seeder
├── public/             # Aset publik
├── resources/
│   ├── views/          # Blade template
├── routes/
│   ├── web.php         # Routing utama
├── .env                # Konfigurasi environment
├── composer.json
├── README.md

👨‍💻 Developer

Hadinata Yusuf Pratama
Developer & Maintainer Sistem Informasi Siswa

Universitas Tadulako — Teknik Informatika

📜 Lisensi

MIT License
Bebas digunakan untuk pembelajaran & pengembangan.
