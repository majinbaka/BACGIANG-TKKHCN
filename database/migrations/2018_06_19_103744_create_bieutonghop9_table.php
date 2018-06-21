<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBieutonghop9Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bieutonghop9', function (Blueprint $table) {
            $table->increments('id');
            $table->date('publish_day')->nullable();
            $table->string('reporter')->nullable();
            $table->string('receiver')->nullable();
            $table->string('year')->nullable();
            $table->string('field_1')->default('1=&2=&3=&4=');
            $table->string('field_2')->default('1=&2=&3=&4=');
            $table->string('field_3')->default('1=&2=&3=&4=');
            $table->string('field_4')->default('1=&2=&3=&4=');
            $table->string('field_5')->default('1=&2=&3=&4=');
            $table->string('field_6')->default('1=&2=&3=&4=');
            $table->string('field_7')->default('1=&2=&3=&4=');
            $table->string('field_8')->default('1=&2=&3=&4=');
            $table->string('field_9')->default('1=&2=&3=&4=');
            $table->string('field_10')->default('1=&2=&3=&4=');
            $table->string('field_11')->default('1=&2=&3=&4=');
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
        Schema::drop('bieutonghop9');
    }
}
