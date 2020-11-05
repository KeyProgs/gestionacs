<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColsVoitures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('voitures', function (Blueprint $table) {
            //
            $table->date('date_acqui')->after('matricule')->nullable();
            $table->date('date_contrat')->after('matricule')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('voitures', function (Blueprint $table) {
            //
        });
    }
}
