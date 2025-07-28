<?php

declare(strict_types=1);

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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('site_name');
            $table->string('email')->nullable();
            $table->string('github');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('youtube');
            $table->string('tiktok')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
