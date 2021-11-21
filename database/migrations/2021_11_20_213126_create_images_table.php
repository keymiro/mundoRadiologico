<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//Tablas para el proceso de imagenes
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->text('name');
            $table->string('Urlimage')->nullable();//Url de la imagen, desde aqui se realiza el llamdo de la ubicacion de la imagen.
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
Schema::table('information', function (Blueprint $table) {
$table->dropForeign('information_IdImage');
$table->dropColumn('IdImage');
});
        Schema::dropIfExists('images');
    }
}
