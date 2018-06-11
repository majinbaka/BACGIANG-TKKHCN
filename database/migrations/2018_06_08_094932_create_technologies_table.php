<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technologies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bieumau1_id')->nullable();
            $table->string('name')->nullable();
            $table->string('year')->nullable();
            $table->string('code')->nullable();
            $table->string('country')->nullable();
            $table->string('use_year')->nullable();
            $table->string('money')->nullable();
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
        Schema::drop('technologies');
    }
}
