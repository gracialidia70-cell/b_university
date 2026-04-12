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
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('namalengkap');
        $table->string('namapanggilan');
        $table->string('email');
        $table->string('nomor_hp', 15);
        $table->string('jalur');
        $table->text('image');
        $table->string('programstudi_1');
        $table->string('programstudi_2');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
