<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_role')->nullable();
            $table->string('service_rendered');
            $table->text('quote');
            $table->integer('rating')->default(5);
            $table->string('avatar_url')->nullable();
            $table->boolean('is_verified')->default(true);
            $table->boolean('is_featured')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
