<?php

namespace Database\Seeders;

use App\Models\Evidence;
use Illuminate\Database\Seeder;

class EvidenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $evidences = [
            [
                'case_id' => 1,
                'jenis_bukti' => 'Screenshot Chat',
                'lokasi_penyimpanan' => '/storage/evidence/case1/screenshot_chat.png',
                'hash_value' => 'a3b5c7d9e1f2a4b6c8d0e2f4a6b8c0d2e4f6a8b0',
                'waktu_pengambilan_bukti' => '2024-01-16 10:30:00',
            ],
            [
                'case_id' => 1,
                'jenis_bukti' => 'Log Akses Email',
                'lokasi_penyimpanan' => '/storage/evidence/case1/email_logs.txt',
                'hash_value' => 'b4c6d8e0f2a4b6c8d0e2f4a6b8c0d2e4f6a8b0c2',
                'waktu_pengambilan_bukti' => '2024-01-16 11:00:00',
            ],
            [
                'case_id' => 2,
                'jenis_bukti' => 'Bukti Transaksi',
                'lokasi_penyimpanan' => '/storage/evidence/case2/transaction_receipt.pdf',
                'hash_value' => 'c5d7e9f1a3b5c7d9e1f3a5b7c9d1e3f5a7b9c1d3',
                'waktu_pengambilan_bukti' => '2024-02-21 14:20:00',
            ],
            [
                'case_id' => 2,
                'jenis_bukti' => 'Screenshot Website Palsu',
                'lokasi_penyimpanan' => '/storage/evidence/case2/fake_website.png',
                'hash_value' => 'd6e8f0a2b4c6d8e0f2a4b6c8d0e2f4a6b8c0d2e4',
                'waktu_pengambilan_bukti' => '2024-02-21 15:00:00',
            ],
            [
                'case_id' => 3,
                'jenis_bukti' => 'Rekaman Percakapan',
                'lokasi_penyimpanan' => '/storage/evidence/case3/conversation_recording.mp3',
                'hash_value' => 'e7f9a1b3c5d7e9f1a3b5c7d9e1f3a5b7c9d1e3f5',
                'waktu_pengambilan_bukti' => '2024-03-11 09:15:00',
            ],
            [
                'case_id' => 3,
                'jenis_bukti' => 'Bukti Transfer',
                'lokasi_penyimpanan' => '/storage/evidence/case3/transfer_proof.jpg',
                'hash_value' => 'f8a0b2c4d6e8f0a2b4c6d8e0f2a4b6c8d0e2f4a6',
                'waktu_pengambilan_bukti' => '2024-03-11 10:00:00',
            ],
        ];

        foreach ($evidences as $evidence) {
            Evidence::create($evidence);
        }
    }
}
