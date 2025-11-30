🏫 Sistem Informasi Siswa — Laravel 12

Sistem Informasi Siswa adalah aplikasi web berbasis Laravel 12 yang dirancang untuk membantu sekolah dalam mengelola data siswa secara modern, rapi, dan efisien.

Website ini menyediakan fitur manajemen siswa, autentikasi admin/user, statistik siswa otomatis, dark mode, dan tampilan dashboard modern yang mudah dipahami oleh semua pengguna.

Dikembangkan oleh:

🌟 Hadynata Yusuf Pratama

Developer yang fokus pada pengalaman pengguna (UX), tampilan UI modern, serta fitur yang stabil dan mudah digunakan.

✨ Fitur Utama
👨‍🎓 Manajemen Data Siswa (CRUD)

Tambah, edit, hapus, dan lihat semua data siswa

Data siswa meliputi: Nama, NIS, Kelas, Gender, dan Alamat

Sistem pencarian siswa berdasarkan nama

🔐 Autentikasi User

Login dan Logout

Role:

Admin → Full access CRUD

User → Hanya melihat data

Keamanan session Laravel

📊 Dashboard Statistik Modern

Dashboard interaktif yang menampilkan:

Total jumlah siswa

Statistik Gender (Laki-laki & Perempuan)

Statistik jumlah siswa per kelas

Mode gelap (Dark Mode) & terang (Light Mode)

Tampilan UI elegan dan responsif

🌙 Dark Mode / Light Mode

Mode gelap untuk kenyamanan mata

Mode terang untuk tampilan cerah

Penyimpanan mode otomatis dalam session

🔍 Pencarian Siswa

Cari siswa berdasarkan nama

Langsung update tabel tanpa reload halaman

🎨 UI Modern & Clean

Menggunakan Bootstrap 5

Warna elegan + icon lucu

Sidebar responsive & dashboard card clean

Layout nyaman untuk admin sekolah

🗂️ Struktur Project
app/
 ├── Http/
 │    ├── Controllers/
 │    │    └── SiswaController.php
 │    └── Middleware/
resources/
 ├── views/
 │    ├── layout.blade.php
 │    ├── dashboard.blade.php
 │    └── siswa/
 │         ├── index.blade.php
 │         ├── create.blade.php
 │         └── edit.blade.php
routes/
 └── web.php
public/
 └── assets

🚀 Cara Clone & Menjalankan Project
1️⃣ Clone Repository
git clone https://github.com/USERNAME/Sistem-Informasi-Siswa.git
cd Sistem-Informasi-Siswa

2️⃣ Install Dependency Composer
composer install

3️⃣ Copy & Atur File .env
cp .env.example .env


Buka file .env, sesuaikan database kamu:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_siswa
DB_USERNAME=root
DB_PASSWORD=

4️⃣ Generate Laravel Key
php artisan key:generate

5️⃣ Migrasi Database
php artisan migrate

6️⃣ Jalankan Server
php artisan serve


Akses di browser:
👉 http://127.0.0.1:8000

🔑 Akun Default (Testing)
Admin
Email: admin@gmail.com
Password: 12345678

User
Email: user@gmail.com
Password: 12345678

🧑‍💻 Developer
💫 Hadynata Yusuf Pratama

“Membangun sistem sekolah yang modern, cepat, dan mudah digunakan adalah tujuan saya. Semoga aplikasi ini membantu digitalisasi sekolah menuju arah yang lebih baik.”

🤝 Kontribusi

Kontribusi sangat diterima!

Fork repo

Buat branch baru

Tambahkan fitur

Ajukan Pull Request

📄 License

Project ini menggunakan lisensi MIT License.
