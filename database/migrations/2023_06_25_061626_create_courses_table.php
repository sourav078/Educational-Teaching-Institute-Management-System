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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('teacher_id');
            $table->integer('category_id');
            $table->string('title');
            $table->string('regular_price');
            $table->string('selling_price');
            $table->text('short_description');
            $table->longText('long_description');
            $table->text('starting_date');
            $table->text('image');
            $table->tinyInteger('status')->default(0);
            $table->integer('enroll_count')->default(0);
            $table->integer('hit_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
