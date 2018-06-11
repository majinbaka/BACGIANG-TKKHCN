<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBieumau3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bieumau3', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('user_id');
            $table->string('reporter_year');
            $table->date('publish_day')->nullable();
            $table->string('total')->nullable();
            $table->string('pay_improve_khcn')->nullable();
            $table->string('pay_khcn')->nullable();
            $table->string('pay_salary_total')->nullable();
            $table->string('pay_salary')->nullable();
            $table->string('pay_machine')->nullable();
            $table->string('pay_normal')->nullable();
            $table->string('pay_mission')->nullable();
            $table->string('mission_lv1')->nullable();
            $table->string('mission_lv2')->nullable();
            $table->string('mission_lv3')->nullable();
            $table->string('mission_lv4')->nullable();
            $table->string('mission_lv5')->nullable();
            $table->string('pay_lab')->nullable();
            $table->string('pay_maintain')->nullable();
            $table->string('pay_univer')->nullable();
            $table->string('pay_improve_other')->nullable();
            $table->string('pay_other')->nullable();
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
        Schema::drop('bieumau3');
    }
}
