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
    Schema::create('footers', function (Blueprint $table) {
        $table->id();
        $table->string('image');
        $table->string('link_instagram');
        $table->string('link_youtube');
        $table->string('link_linkedin');
        $table->string('link_facebook');
        $table->string('alamat');
        $table->string('email');
        $table->string('wa');
        $table->string('link_gmaps');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
