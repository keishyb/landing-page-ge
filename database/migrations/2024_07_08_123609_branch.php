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
        schema::create('branch', function (Blueprint $table){
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('hari1');
            $table->string('jam1');
            $table->string('hari2');
            $table->string('jam2');
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
