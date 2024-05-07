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
        Schema::create('driveins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reg_num');
            $table->string('category');
            $table->bigInteger('num');
            $table->string('name');
            $table->timestamps();
            $table->string('status')->default('in');
            $table->integer('charge')->nullable()->default(NULL);
            $table->string('payment_mode')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driveins');
    }
};
