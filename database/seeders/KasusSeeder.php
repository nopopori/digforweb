<?php

namespace Database\Seeders;

use App\Models\Kasus;
use Illuminate\Database\Seeder;

class KasusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kasuses = [
            [
                'korban_id' => 1,
                'jenis_kasus' => 'Peretasan Akun',
                'tanggal_kejadian' => '2024-01-10',
                'ringkasan_kasus' => 'Akun email dan media sosial korban diretas. Pelaku menggunakan akun untuk melakukan penipuan kepada kontak korban.',
                'status_kasus' => 'dalam investigasi',
            ],
            [
                'korban_id' => 2,
                'jenis_kasus' => 'Pencurian Data Kartu Kredit',
                'tanggal_kejadian' => '2024-02-15',
                'ringkasan_kasus' => 'Data kartu kredit korban dicuri melalui situs e-commerce palsu. Terjadi transaksi tidak sah sebesar Rp 15.000.000.',
                'status_kasus' => 'pending',
            ],
            [
                'korban_id' => 3,
                'jenis_kasus' => 'Penipuan Investasi Online',
                'tanggal_kejadian' => '2024-03-05',
                'ringkasan_kasus' => 'Korban menjadi korban skema investasi bodong melalui platform media sosial dengan kerugian Rp 50.000.000.',
                'status_kasus' => 'dalam investigasi',
            ],
            [
                'korban_id' => 1,
                'jenis_kasus' => 'Pencurian Identitas',
                'tanggal_kejadian' => '2024-01-12',
                'ringkasan_kasus' => 'Identitas korban digunakan untuk membuat akun pinjaman online ilegal.',
                'status_kasus' => 'selesai',
            ],
        ];

        foreach ($kasuses as $kasus) {
            Kasus::create($kasus);
        }
    }
}
