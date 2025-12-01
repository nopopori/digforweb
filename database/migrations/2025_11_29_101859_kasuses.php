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
    Schema::create('kasuses', function (Blueprint $table) {
        $table->id();
        $table->foreignId('korban_id')->constrained('korbans')->onDelete('cascade');
        $table->string('jenis_kasus');
        $table->date('tanggal_kejadian');
        $table->text('ringkasan_kasus');
        $table->string('status_kasus')->default('pending');
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
