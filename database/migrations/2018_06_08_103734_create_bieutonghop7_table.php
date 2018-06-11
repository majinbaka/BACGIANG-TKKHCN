<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBieutonghop7Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bieutonghop7', function (Blueprint $table) {
            $table->increments('id');
            $table->date('publish_day')->nullable();
            $table->string('reporter')->nullable();
            $table->string('receiver')->nullable();
            $table->string('year')->nullable();
            $table->string('field_1')->nullable();
            $table->string('field_2')->nullable();
            $table->string('field_3')->nullable();
            $table->string('field_4')->nullable();
            $table->string('field_5')->nullable();
            $table->string('field_6')->nullable();
            $table->string('field_7')->nullable();
            $table->string('field_8')->nullable();
            $table->string('field_9')->nullable();
            $table->string('field_10')->nullable();
            $table->string('field_11')->nullable();
            $table->string('field_12')->nullable();
            $table->string('field_13')->nullable();
            $table->string('field_14')->nullable();
            $table->string('field_15')->nullable();
            $table->string('field_16')->nullable();
            $table->string('field_17')->nullable();
            $table->string('field_18')->nullable();
            $table->string('field_19')->nullable();
            $table->string('field_20')->nullable();
            $table->string('field_21')->nullable();
            $table->string('field_22')->nullable();
            $table->string('field_23')->nullable();
            $table->string('field_24')->nullable();
            $table->string('field_25')->nullable();
            $table->string('field_26')->nullable();
            $table->string('field_27')->nullable();
            $table->string('field_28')->nullable();
            $table->string('field_29')->nullable();
            $table->string('field_30')->nullable();
            $table->string('field_31')->nullable();
            $table->string('field_32')->nullable();
            $table->string('field_33')->nullable();
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
        Schema::drop('bieutonghop7');
    }
}
