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

    Schema::create('cinemas', function (Blueprint $table) {
        $table->id();
        $table->string('image');
        $table->string('title');
        $table->text('description');
        $table->date('booking_date');
        $table->time('duration');
        $table->enum('genre', ['fantasi', 'action', 'horor', 'romance', 'keluarga']);
        $table->integer('available_seats');
        $table->timestamps();

 });

}

public function down(): void
{
    Schema::dropIfExists('cinemas');
}
};