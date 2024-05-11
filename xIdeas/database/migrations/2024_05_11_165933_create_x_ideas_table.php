<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *varchar 240 char
     * likes integer 0
     * crated_at
     * updated_at
     * 
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('xIdeas', function (Blueprint $table) {
            $table->id();
            $table->string('content', 240);
            $table->unsignedInteger('likes')->default(0);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xIdeas');
    }
};
