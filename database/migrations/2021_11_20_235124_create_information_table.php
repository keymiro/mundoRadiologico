<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('description');
            $table->unsignedBigInteger('IdImage')->nullable();//Id de la imagen
            $table->unsignedBigInteger('IdCat')->nullable();//Id de la categoria
            $table->integer('Ord');//El nùmero del orden de la informacion
            $table->foreign('IdImage')->references('id')->on('images')->onUpdate('cascade')->onDelete('set null');
                $table->foreign('IdCat')->references('id')->on('catimages')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('information');
    }
}
