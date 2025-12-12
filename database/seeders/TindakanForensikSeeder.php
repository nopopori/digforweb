<?php

namespace Database\Seeders;

use App\Models\TIndakanForensik;
use Illuminate\Database\Seeder;

class TindakanForensikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tindakans = [
            [
                'case_id' => 1,
                'tahap_forensik' => 'identification',
                'desk_tindakan' => 'Identifikasi perangkat dan akun yang terkena dampak peretasan.',
                'waktu_pelaksanaan' => '2024-01-16 08:00:00',
                'pic' => 'Agus Setiawan',
                'status_tindakan' => 'completed',
            ],
            [
                'case_id' => 1,
                'tahap_forensik' => 'preservation',
                'desk_tindakan' => 'Preservasi data log akses dan aktivitas mencurigakan.',
                'waktu_pelaksanaan' => '2024-01-16 10:00:00',
                'pic' => 'Agus Setiawan',
                'status_tindakan' => 'completed',
            ],
            [
                'case_id' => 1,
                'tahap_forensik' => 'collection',
                'desk_tindakan' => 'Pengumpulan bukti digital berupa screenshot dan log akses.',
                'waktu_pelaksanaan' => '2024-01-16 13:00:00',
                'pic' => 'Rina Wulandari',
                'status_tindakan' => 'completed',
            ],
            [
                'case_id' => 1,
                'tahap_forensik' => 'examination',
                'desk_tindakan' => 'Analisis pola akses dan identifikasi pelaku peretasan.',
                'waktu_pelaksanaan' => '2024-01-17 09:00:00',
                'pic' => 'Rina Wulandari',
                'status_tindakan' => 'pending',
            ],
            [
                'case_id' => 2,
                'tahap_forensik' => 'identification',
                'desk_tindakan' => 'Identifikasi website palsu dan metode pencurian data.',
                'waktu_pelaksanaan' => '2024-02-21 10:00:00',
                'pic' => 'Budi Hartono',
                'status_tindakan' => 'completed',
            ],
            [
                'case_id' => 2,
                'tahap_forensik' => 'collection',
                'desk_tindakan' => 'Pengumpulan bukti transaksi dan screenshot website palsu.',
                'waktu_pelaksanaan' => '2024-02-21 14:00:00',
                'pic' => 'Budi Hartono',
                'status_tindakan' => 'completed',
            ],
            [
                'case_id' => 3,
                'tahap_forensik' => 'identification',
                'desk_tindakan' => 'Identifikasi platform investasi bodong dan modus operandi.',
                'waktu_pelaksanaan' => '2024-03-11 08:30:00',
                'pic' => 'Dewi Kusuma',
                'status_tindakan' => 'completed',
            ],
            [
                'case_id' => 3,
                'tahap_forensik' => 'preservation',
                'desk_tindakan' => 'Preservasi bukti komunikasi dan transaksi keuangan.',
                'waktu_pelaksanaan' => '2024-03-11 11:00:00',
                'pic' => 'Dewi Kusuma',
                'status_tindakan' => 'completed',
            ],
        ];

        foreach ($tindakans as $tindakan) {
            TIndakanForensik::create($tindakan);
        }
    }
}
