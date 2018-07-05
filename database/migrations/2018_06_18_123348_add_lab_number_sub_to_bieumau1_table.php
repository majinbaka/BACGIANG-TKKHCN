<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLabNumberSubToBieumau1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bieumau1', function($table){
            $table->string('lab_number_sub')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bieumau1', function($table){
            $table->dropColumn('lab_number_sub')->nullable();
        });
    }
}
