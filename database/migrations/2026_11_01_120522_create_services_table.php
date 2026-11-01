<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category');
            $table->string('icon')->default('shield-check');
            $table->text('short_description');
            $table->string('hero_headline');
            $table->text('hero_subheadline');
            $table->longText('overview');
            $table->json('why_needed')->nullable();
            $table->json('investigation_scope')->nullable();
            $table->json('methods_tools')->nullable();
            $table->json('process_steps')->nullable();
            $table->text('legal_compliance_text')->nullable();
            $table->json('deliverables')->nullable();
            $table->json('faq_items')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description', 350)->nullable();
            $table->string('featured_image')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
