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
        
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->longText('text_uz');
            $table->longText('text_ru');
            $table->longText('text_en');
            $table->longText('shortText_uz');
            $table->longText('shortText_ru');
            $table->longText('shortText_en');
            $table->string('link');
            $table->string('poster');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
