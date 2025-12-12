<?php

namespace Database\Seeders;

use App\Models\Korban;
use Illuminate\Database\Seeder;

class KorbanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $korbans = [
            [
                'nama' => 'Ahmad Hidayat',
                'kontak' => '081234567890',
                'lokasi' => 'Jakarta Selatan',
                'tgl_laporan' => '2024-01-15',
                'deskripsi_laporan' => 'Kehilangan data pribadi akibat peretasan akun email dan media sosial.',
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'kontak' => '081234567891',
                'lokasi' => 'Bandung',
                'tgl_laporan' => '2024-02-20',
                'deskripsi_laporan' => 'Pencurian data kartu kredit dari transaksi online yang mencurigakan.',
            ],
            [
                'nama' => 'Budi Santoso',
                'kontak' => '081234567892',
                'lokasi' => 'Surabaya',
                'tgl_laporan' => '2024-03-10',
                'deskripsi_laporan' => 'Penipuan investasi online dengan kerugian materiil yang signifikan.',
            ],
        ];

        foreach ($korbans as $korban) {
            Korban::create($korban);
        }
    }
}
