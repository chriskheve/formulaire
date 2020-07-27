<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etats', function (Blueprint $table) {
            $table->id();
            $table->string('montantDebourse')->nullable();
            $table->string('nonDecaisse')->nullable();
            $table->string('paiement')->nullable();
            $table->unsignedBigInteger('document_id');
            $table->foreign('document_id')->references('id')->on('documents');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('etats');
    }
}
