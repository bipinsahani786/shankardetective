<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('state');
            $table->boolean('is_hq')->default(false);
            $table->string('hero_title');
            $table->text('hero_subtitle');
            $table->string('meta_title')->nullable();
            $table->string('meta_description', 350)->nullable();
            $table->longText('local_overview');
            $table->json('popular_services')->nullable();
            $table->json('local_landmarks')->nullable();
            $table->string('office_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('map_embed_url')->nullable();
            $table->json('local_faq')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
