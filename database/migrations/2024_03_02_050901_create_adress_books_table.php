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
        Schema::create('adress_books', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('city');
            $table->string('adress');
            $table->string('email');
            $table->integer('PersonalNumber');
            $table->integer('WorkNumber');
            $table->integer('AdditionalNumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adress_books');
    }
};
