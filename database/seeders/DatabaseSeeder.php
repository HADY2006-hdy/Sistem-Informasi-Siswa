<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Hapus dulu user lama (opsional, tapi aman kalau pakai migrate:fresh)
        // User::truncate();

        // USER ADMIN
        User::create([
            'name'     => 'Admin Sistem',
            'email'    => 'admin@example.com',
            'password' => bcrypt('admin123'), // wajib di-hash
            'role'     => 'admin',            // pastikan ada kolom role di tabel users
        ]);

        // USER GURU/OPERATOR (opsional)
        User::create([
            'name'     => 'Guru 1',
            'email'    => 'guru@example.com',
            'password' => bcrypt('guru123'),
            'role'     => 'guru',
        ]);
    }
}
