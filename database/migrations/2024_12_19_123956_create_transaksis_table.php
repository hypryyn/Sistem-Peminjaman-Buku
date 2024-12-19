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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('siswa_id'); // Foreign key to Siswa table
            $table->unsignedBigInteger('buku_id'); // Foreign key to Buku table
            $table->date('tanggal_pinjam'); // Borrow date
            $table->date('tanggal_kembali')->nullable(); // Return date
            $table->enum('status', ['pinjam', 'kembali'])->default('pinjam'); // Status of transaction
            $table->timestamps();
        
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
            $table->foreign('buku_id')->references('id')->on('buku')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
