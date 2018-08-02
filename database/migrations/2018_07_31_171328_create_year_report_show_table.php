<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearReportShowTable extends Migration
{
    public function up()
    {
        Schema::create('year_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('year');
            $table->integer('user_id');
            $table->integer('type');
            $table->integer('status')->default(0);
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
        Schema::drop('year_reports');
    }
}
