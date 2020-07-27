<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controles', function (Blueprint $table) {
            $table->id();
            $table->string('lettreDeMarche')->nullable();
            $table->string('reception')->nullable();
            $table->string('rapport')->nullable();
            $table->string('cahier')->nullable();
            $table->string('conformite')->nullable();
            $table->string('signat')->nullable();
            $table->string('rapportDeReception')->nullable();
            $table->string('retenue')->nullable();
            $table->string('validation')->nullable();
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
        Schema::dropIfExists('controles');
    }
}
