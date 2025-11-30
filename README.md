📘 SISTEM INFORMASI SISWA — Web Akademik Sekolah

Sistem Informasi Siswa adalah aplikasi berbasis Laravel yang dirancang untuk membantu sekolah mengelola data siswa, guru, kelas, mata pelajaran, jadwal, dan nilai dengan mudah dan terstruktur.

Tujuan aplikasi ini: bikin pengelolaan data akademik lebih cepat, rapi, aman, dan lebih efisien, dengan tampilan modern serta fitur manajemen lengkap.

✨ Fitur Utama
🧑‍🏫 Manajemen Siswa

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

Relasi ke guru & jadwal

🗓️ Manajemen Jadwal Pelajaran

Tambah, edit, dan hapus jadwal

Penjadwalan otomatis berdasarkan kelas & mapel

📊 Dashboard Statistik

Jumlah siswa per kelas

Statistik gender

Ringkasan data akademik sekolah

💻 Teknologi yang Digunakan
Teknologi	Keterangan
Laravel 10+	Framework utama backend
PHP 8.2+	Bahasa pemrograman
MySQL / MariaDB	Database aplikasi
Blade Template	Tampilan UI
Bootstrap 5	Styling & UI layout
Chart.js	Statistik grafik dashboard
Composer	Dependency manager Laravel
🛠 Cara Clone & Menjalankan Sistem Informasi Siswa

Langkah demi langkah (format sama dengan README AURA)

1️⃣ Install Git

Download Git:
🔗 https://git-scm.com/downloads

Cek instalasi:

git --version

2️⃣ Install Composer

Laravel butuh Composer untuk mengelola dependency.

Download di sini:
🔗 https://getcomposer.org/download/

Cek:

composer --version

3️⃣ Install PHP & XAMPP

Download XAMPP:
🔗 https://www.apachefriends.org/

Wajib menggunakan PHP 8.2 atau lebih baru

Aktifkan Apache & MySQL

4️⃣ Clone Repository

Pilih folder, lalu jalankan:

git clone https://github.com/HADY2006-hdy/Sistem-Informasi-Siswa.git


Masuk ke folder:

cd Sistem-Informasi-Siswa

5️⃣ Install Dependency Laravel
composer install

6️⃣ Copy File Environment
cp .env.example .env


Edit .env dan ubah konfigurasi database:

DB_DATABASE=db_siswa
DB_USERNAME=root
DB_PASSWORD=


Buat database di phpMyAdmin dengan nama: db_siswa

7️⃣ Generate Key Laravel
php artisan key:generate

8️⃣ Migrasi Database & Seeder
php artisan migrate --seed


Seeder akan membuat akun admin otomatis.

🔐 Default Login Admin

Email: admin@gmail.com

Password: 12345678

9️⃣ Jalankan Server Laravel
php artisan serve


Akses melalui browser:

http://127.0.0.1:8000

🔧 Perintah Tambahan (Jika Error)
Bersihkan Cache Laravel:
php artisan optimize:clear

Jika tampilan tidak berubah:
php artisan view:clear

Jika migration bermasalah:
php artisan migrate:fresh --seed

👨‍💻 Developer

Hadinata Yusuf Pratama
Developer Sistem Informasi Siswa
Universitas Tadulako — Teknik Informatika
