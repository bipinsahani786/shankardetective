<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('service_category');
            $table->text('client_challenge');
            $table->text('investigation_approach');
            $table->text('outcome_verdict');
            $table->string('key_evidence_type');
            $table->integer('timeline_days')->default(7);
            $table->string('meta_title')->nullable();
            $table->string('meta_description', 350)->nullable();
            $table->boolean('is_featured')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
