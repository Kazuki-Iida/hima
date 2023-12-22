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
        Schema::create('fighters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->float('height', 5, 2);
            $table->float('weight', 5, 2);
            $table->integer('win')->default(0);
            $table->integer('lose')->default(0);
            $table->integer('power')->default(0);
            $table->integer('speed')->default(0);
            $table->integer('technic')->default(0);
            $table->integer('intelli')->default(0);
            $table->integer('stamina')->default(0);
            $table->integer('mental')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fighters');
    }
};

