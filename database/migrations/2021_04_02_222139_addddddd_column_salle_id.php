<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdddddddColumnSalleId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empts', function (Blueprint $table) {
            $table->integer('salle_id')->unsigned()->after('id');
            $table->foreign('salle_id')->references('id')->on('salles');
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
