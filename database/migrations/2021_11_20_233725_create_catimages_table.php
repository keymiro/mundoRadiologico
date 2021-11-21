<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catimages', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('description');
            $table->timestamps();
        });

    Schema::table('images', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('catimages')->onUpdate('cascade')->onDelete('set null');
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
Schema::table('images', function (Blueprint $table) {
$table->dropForeign('images_category_id_foreign');
$table->dropColumn('category_id');
});
        Schema::dropIfExists('catimages');
    }
}
