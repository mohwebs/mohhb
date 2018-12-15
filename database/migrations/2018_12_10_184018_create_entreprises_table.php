<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('email');
            $table->string('password');
            $table->text('description')->nullable();
            $table->string('datefoundation')->nullable();
            $table->integer('tel')->nullable();
            $table->string('siteweb')->nullable();

            $table->string('logo')->nullable();
            $table->string('adresse')->nullable();
            $table->string('region')->nullable();

            $table->string('ville')->nullable();
            $table->string('postal')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('twitter')->nullable();
            $table->string('googleplus')->nullable();
            $table->string('instagram')->nullable();

            $table->rememberToken();
            $table->unsignedInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories');
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
        Schema::dropIfExists('entreprises');
    }
}
