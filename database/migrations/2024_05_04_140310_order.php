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
        Schema::create('order', function (Blueprint $table) {
            $table ->id();
            $table ->string('name_order');
            $table ->string('description_order');
            $table->unsignedBigInteger('FK_Customer');
            $table->foreign('FK_Customer')->references('id')->on('users');
            $table->unsignedBigInteger('FK_Executor');
            $table->foreign('FK_Executor')->references('id')->on('users');
            $table ->integer('status');
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
