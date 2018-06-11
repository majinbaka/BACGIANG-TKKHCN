<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBieumau1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bieumau1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('user_id');
            $table->date('publish_day')->nullable();
            $table->string('reporter')->nullable();
            $table->string('receiver')->nullable();
            $table->string('reporter_year')->nullable();
            $table->string('reporter_element_name')->nullable();
            $table->string('reporter_transfer_name')->nullable();
            $table->string('reporter_eng_name')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('fax')->nullable();
            $table->string('website')->nullable();
            $table->string('establish_code')->nullable();
            $table->date('establish_day')->nullable();
            $table->string('establish_lever')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('certificate_number')->nullable();
            $table->date('certificate_date')->nullable();
            $table->string('certificate_grant')->nullable();
            $table->string('manager')->nullable();
            $table->string('manager_city')->nullable();
            $table->string('type_company')->nullable();
            $table->string('type_econom')->nullable();
            $table->string('money')->nullable();
            $table->string('lab_number')->nullable();
            $table->string('lab_range')->nullable();
            $table->text('lab_description')->nullable();
            $table->string('report_info')->nullable();
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
        Schema::drop('bieumau1');
    }
}
