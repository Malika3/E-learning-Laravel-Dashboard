<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddddddddColumnSeanceId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('niveaux', function (Blueprint $table) {
            $table->integer('seance_id')->unsigned()->after('id');
            $table->foreign('seance_id')->references('id')->on('seances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('niveaux', function (Blueprint $table) {
            //
        });
    }
}
