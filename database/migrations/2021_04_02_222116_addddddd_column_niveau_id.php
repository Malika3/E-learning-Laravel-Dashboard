<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdddddddColumnNiveauId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empts', function (Blueprint $table) {
            $table->integer('niveau_id')->unsigned()->after('id');
            $table->foreign('niveau_id')->references('id')->on('niveaux');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empts', function (Blueprint $table) {
            //
        });
    }
}
