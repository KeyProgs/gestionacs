<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinistresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinistres', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('voiture_id');
            $table->foreign('voiture_id')->references('id')->on('voitures');
            $table->integer('sinistre_id')->nullable();

            $table->date('sinistre_date')->nullable();
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
        Schema::dropIfExists('sinistres');
    }
}
