<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('nature')->nullable();
            $table->string('devise')->nullable();
            $table->string('montant')->nullable();
            $table->string('deduire')->nullable();
            $table->string('beneficiaire')->nullable();
            $table->string('compteBeneficiaire')->nullable();
            $table->string('banque')->nullable();
            $table->string('objet')->nullable();
            $table->string('dateDeSignature')->nullable();
            $table->string('dateDeCloture')->nullable();
            $table->string('financement')->nullable();
            $table->string('categorie')->nullable();
            $table->string('montantRef')->nullable();
            $table->string('marche')->nullable();
            $table->integer('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('documents');
    }
}
