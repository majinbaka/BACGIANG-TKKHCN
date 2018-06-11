<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBieumau2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bieumau2', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name')->nullable();
            $table->string('reporter_year');
            $table->date('publish_day')->nullable();
            $table->string('total')->nullable();
            $table->string('female_total')->nullable();
            $table->string('nation_vn')->nullable();
            $table->string('nation_kinh')->nullable();
            $table->string('nation_other')->nullable();
            $table->string('nation_foregin')->nullable();
            $table->string('class_khtn')->nullable();
            $table->string('class_khkt')->nullable();
            $table->string('class_khyd')->nullable();
            $table->string('class_khnn')->nullable();
            $table->string('class_khxh')->nullable();
            $table->string('class_khnv')->nullable();
            $table->string('class_other')->nullable();
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
        Schema::drop('bieumau2');
    }
}
