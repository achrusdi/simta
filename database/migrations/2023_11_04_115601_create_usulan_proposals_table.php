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
        Schema::create('usulan_proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswa'); // FK to mahasiswa table
            $table->string('periode');
            $table->string('judul');
            $table->foreignId('dosen_pembimbing_id')->constrained('dosen'); // FK to dosen table
            $table->integer('sks_lulus');
            $table->double('ipk', 3, 2);
            $table->integer('skor_teofl');
            $table->string('url_proposal');
            $table->string('url_form_pendaftaran');
            $table->string('url_toefl');
            $table->string('url_ipk');
            $table->string('url_sks_lulus');
            $table->enum('status', ['perbaikan', 'valid', 'diajukan']);
            $table->timestamps(); // created_at and updated_at timestamps
            $table->dateTime('deleted_at')->nullable(); // created_at and updated_at ti
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usulan_proposals');
    }
};
