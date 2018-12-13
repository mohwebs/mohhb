<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffreEmploiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::create('offre_emplois', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nom_de_poste');
        $table->text('description');
        $table->text('profile')->nullable();
        $table->text('mission')->nullable();
        $table->text('avantage')->nullable();
        $table->text('experience')->nullable();

        $table->string('categorie')->nullable();
        $table->string('nbr_poste')->nullable();
        $table->string('type_contrat')->nullable();
        $table->string('niveau_poste')->nullable();
        $table->string('datevalidation')->nullable();
        $table->string('diplome')->nullable();
        $table->string('salaire')->nullable();
        $table->string('postal')->nullable();
        $table->string('adresse')->nullable();
        $table->string('ville')->nullable();


        $table->unsignedInteger('entreprise_id');
        $table->foreign('entreprise_id')->references('id')->on('entreprises');

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
        Schema::dropIfExists('offre_emploies');
    }
}
