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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the service, e.g., Cybersecurity, Cloud Solutions, AI & Automation
            $table->string('slug')->unique(); // URL-friendly version of the name, e.g., cybersecurity, cloud-solutions
            $table->string('photo'); // Preview image or icon shown on landing/services grid
            $table->string('short_desc'); // Brief, engaging summary shown on landing/service cards
            $table->text('full_desc'); // Detailed service description for the dedicated service page
            $table->string('banner_pic'); // Large banner image shown at the top of the service detail page
            $table->boolean('is_featured')->default(false); // To highlight certain services on landing page
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
