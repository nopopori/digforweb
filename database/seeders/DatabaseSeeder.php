<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Viewer account
        User::create([
            'name' => 'Viewer User',
            'email' => 'viewer@example.com',
            'password' => bcrypt('password'),
            'role' => 'viewer',
            'kontak' => '081234567890',
        ]);

        // Create Petugas account
        User::create([
            'name' => 'Petugas User',
            'email' => 'petugas@example.com',
            'password' => bcrypt('password'),
            'role' => 'petugas',
            'nip' => 'NIP123456',
            'kontak' => '081234567891',
        ]);

        // Seed all entities in proper order (respecting foreign keys)
        $this->call([
            KorbanSeeder::class,
            KasusSeeder::class,
            EvidenceSeeder::class,
            TindakanForensikSeeder::class,
        ]);
    }
}
