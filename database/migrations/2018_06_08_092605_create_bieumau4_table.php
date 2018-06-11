<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBieumau4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bieumau4', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name')->nullable();
            $table->date('publish_day')->nullable();
            $table->string('reporter_year');
            $table->string('total')->nullable();
            $table->string('subject_lv1')->nullable();
            $table->string('subject_lv2')->nullable();
            $table->string('subject_lv3')->nullable();
            $table->string('subject_lv4')->nullable();
            $table->string('subject_lv5')->nullable();
            $table->string('subject_lab_1')->nullable();
            $table->string('subject_lab_2')->nullable();
            $table->string('subject_lab_3')->nullable();
            $table->string('subject_lab_4')->nullable();
            $table->string('subject_lab_5')->nullable();
            $table->string('subject_lab_6')->nullable();
            $table->string('subject_money_1')->nullable();
            $table->string('subject_money_2')->nullable();
            $table->string('subject_money_3')->nullable();
            $table->string('subject_money_4')->nullable();
            $table->string('subject_money_5')->nullable();
            $table->string('subject_money_6')->nullable();
            $table->string('subject_money_7')->nullable();
            $table->string('total_job')->nullable();
            $table->string('total_job_1')->nullable();
            $table->string('total_job_2')->nullable();
            $table->string('total_job_3')->nullable();
            $table->string('total_job_4')->nullable();
            $table->string('total_job_5')->nullable();
            $table->string('total_lab_1')->nullable();
            $table->string('total_lab_2')->nullable();
            $table->string('total_lab_3')->nullable();
            $table->string('total_lab_4')->nullable();
            $table->string('total_lab_5')->nullable();
            $table->string('total_lab_6')->nullable();
            $table->string('total_money_1')->nullable();
            $table->string('total_money_2')->nullable();
            $table->string('total_money_3')->nullable();
            $table->string('total_money_4')->nullable();
            $table->string('total_money_5')->nullable();
            $table->string('total_money_6')->nullable();
            $table->string('total_money_7')->nullable();
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
        Schema::drop('bieumau4');
    }
}
