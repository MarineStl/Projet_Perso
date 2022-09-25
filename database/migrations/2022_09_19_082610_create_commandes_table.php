<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('mail');
            $table->string('portable');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('complement');
            $table->string('code');
            $table->string('ville');
            $table->string('produit');
            $table->string('quantite');
            $table->string('prix');
            $table->string('ttc');
            $table->string('paiement');
            $table->string('nombis');
            $table->string('prenombis');
            $table->string('adressebis');
            $table->string('complementbis');
            $table->string('codebis');
            $table->string('villebis');

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
        Schema::dropIfExists('commandes');
    }
};
