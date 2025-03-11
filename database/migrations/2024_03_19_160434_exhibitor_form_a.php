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
        Schema::create('exhibitor_form_a', function (Blueprint $table) {
            $table->id();
            $table->string('perusahaan')->nullable();
            $table->longText('alamat')->nullable();
            $table->string('telp_kantor')->nullable();
            $table->string('no_npwp')->nullable();
            $table->string('alamat_npwp')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('pic')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('handphone')->nullable();
            $table->string('kategori')->nullable();
            $table->string('bidang_usaha')->nullable();
            $table->string('hall')->nullable();
            $table->string('nomor_stand')->nullable();
            $table->string('fascia')->nullable();
            $table->string('status')->nullable();
            $table->string('sales')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhibitor_form_a');
    }
};
