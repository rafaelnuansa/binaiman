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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->text('philosophy');
            $table->text('philosophy_en')->nullable();
            $table->text('philosophy_ar')->nullable();
            $table->text('vision');
            $table->text('vision_en')->nullable();
            $table->text('vision_ar')->nullable();
            $table->text('mission');
            $table->text('mission_en')->nullable();
            $table->text('mission_ar')->nullable();
            $table->text('purpose');
            $table->text('purpose_en')->nullable();
            $table->text('purpose_ar')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
