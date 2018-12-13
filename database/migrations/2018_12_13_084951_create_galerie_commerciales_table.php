<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalerieCommercialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galerie_commerciales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file');
            $table->timestamps();

            $table->unsignedInteger('offre_commerciale_id');
            $table->foreign('offre_commerciale_id')->references('id')->on('offre_commerciales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galerie_commerciales');
    }
}
