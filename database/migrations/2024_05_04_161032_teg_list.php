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
        Schema::create('teg_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('FK_order');
            $table->foreign('FK_order')->references('id')->on('order');
            $table->unsignedBigInteger('FK_teg');
            $table->foreign('FK_teg')->references('id')->on('teg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
