<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('evidence', function (Blueprint $table) {
        $table->id();
        $table->foreignId('case_id')->constrained('kasuses')->onDelete('cascade');
        $table->string('jenis_bukti');
        $table->string('lokasi_penyimpanan');
        $table->string('hash_value');
        $table->timestamp('waktu_pengambilan_bukti');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
