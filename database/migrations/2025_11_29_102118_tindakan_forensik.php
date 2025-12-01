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
    Schema::create('tindakan_forensik', function (Blueprint $table) {
        $table->id();
        $table->foreignId('case_id')->constrained('kasuses')->onDelete('cascade');
        $table->enum('tahap_forensik', [
            'identification',
            'preservation',
            'collection',
            'examination',
            'documentation',
            'presentation'
        ]);
        $table->text('desk_tindakan');
        $table->timestamp('waktu_pelaksanaan')->nullable();
        $table->string('pic');
        $table->enum('status_tindakan', ['pending', 'completed'])
              ->default('pending');
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
