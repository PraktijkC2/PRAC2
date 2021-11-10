<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoekenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boeken', function (Blueprint $table) {
            $table->id();
            $table->string('titel', 255);
            $table->text('omschrijving');
            $table->string('auteur', 255);
            $table->integer('pages');
            $table->decimal('price', 8, 2);
            $table->string('image');
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
        Schema::dropIfExists('boeken');
    }
}
