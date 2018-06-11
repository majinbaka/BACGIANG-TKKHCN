<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBieumau6Table extends Migration
{
    public function up()
    {
        Schema::create('bieumau6', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name')->nullable();
            $table->string('reporter_year');
            $table->date('publish_day')->nullable();
            $table->string('total')->nullable();
            $table->string('total_award_vn')->nullable();
            $table->string('total_award_vn1')->nullable();
            $table->string('total_award_vn2')->nullable();
            $table->string('total_award_vn3')->nullable();
            $table->string('total_award_vn4')->nullable();
            $table->string('total_award_vn5')->nullable();
            $table->string('total_award_other')->nullable();
            $table->string('total_award_team')->nullable();
            $table->string('total_award_fm')->nullable();
            $table->string('total_award_male')->nullable();
            $table->string('total_award_female')->nullable();
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
        Schema::drop('bieumau6');
    }
}
