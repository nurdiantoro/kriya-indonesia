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
        Schema::table('exhibitor', function (Blueprint $table) {
            $table->string('no_npwp')->nullable()->after('telp_kantor');
            $table->string('alamat_npwp')->nullable()->after('no_npwp');
            $table->string('bidang_usaha')->nullable()->after('kategori');
            $table->string('hall')->nullable()->after('bidang_usaha');
            $table->string('fascia')->nullable()->after('nomor_stand');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exhibitor', function (Blueprint $table) {
            //
        });
    }
};
