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
        Schema::create('qoshimcha_dars', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->integer('participants');
            $table->integer('teacher_id');
            $table->string("work_days");
            $table->string("work_time");
            $table->json("classes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qoshimcha_dars');
    }
};
