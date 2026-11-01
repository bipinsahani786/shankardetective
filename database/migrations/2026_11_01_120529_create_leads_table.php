<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('service_requested')->nullable();
            $table->string('preferred_contact_method')->default('Phone'); // Phone, WhatsApp, Email
            $table->string('urgency')->default('Within 24 Hours'); // Immediate, Within 24 Hours, Flexible
            $table->text('message')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('status')->default('new'); // new, contacted, in_investigation, resolved, closed
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
