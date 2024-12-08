<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('cinemas', function (Blueprint $table) {
            if (!Schema::hasColumn('cinemas', 'harga_tiket')) {
                $table->integer('harga_tiket')->nullable(); // Tambahkan jika belum ada
            }
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cinemas', function (Blueprint $table) {
            //
        });
    }
};
