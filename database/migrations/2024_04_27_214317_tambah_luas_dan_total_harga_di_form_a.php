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
        Schema::table('exhibitor_form_a', function (Blueprint $table) {
            $table->string('panjang')->nullable()->after('fascia');
            $table->string('lebar')->nullable()->after('panjang');
            $table->string('luas')->nullable()->after('lebar');
            $table->string('harga')->nullable()->after('luas');
            $table->string('total_harga')->nullable()->after('harga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exhibitor_form_a', function (Blueprint $table) {
            //
        });
    }
};
