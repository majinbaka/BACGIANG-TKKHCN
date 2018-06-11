<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBieumau5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bieumau5', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name')->nullable();
            $table->date('publish_day')->nullable();
            $table->string('reporter_year');
            $table->string('total')->nullable();
            $table->string('mission_lab_1')->nullable();
            $table->string('mission_lab_2')->nullable();
            $table->string('mission_lab_3')->nullable();
            $table->string('mission_lab_4')->nullable();
            $table->string('mission_lab_5')->nullable();
            $table->string('mission_lab_6')->nullable();
            $table->string('collaborate_1')->nullable();
            $table->string('collaborate_2')->nullable();
            $table->string('collaborate_3')->nullable();
            $table->string('collaborate_4')->nullable();
            $table->string('money_1')->nullable();
            $table->string('money_2')->nullable();
            $table->string('money_3')->nullable();
            $table->string('money_4')->nullable();
            $table->string('money_5')->nullable();
            $table->string('team_out')->nullable();
            $table->string('human_out')->nullable();
            $table->string('team_in')->nullable();
            $table->string('human_in')->nullable();
            $table->string('total_h1')->nullable();
            $table->string('total_h2')->nullable();
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
        Schema::drop('bieumau5');
    }
}
