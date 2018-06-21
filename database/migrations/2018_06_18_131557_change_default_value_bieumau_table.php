<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDefaultValueBieumauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('bieumau2', function($table){
        //     $table->string('total')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('female_total')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('nation_vn')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('nation_kinh')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('nation_other')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('nation_foregin')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('class_khtn')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('class_khkt')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('class_khyd')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('class_khnn')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('class_khxh')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('class_khnv')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('class_other')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        // });

        // Schema::create('bieumau3', function (Blueprint $table) {
        //     $table->string('total')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('pay_improve_khcn')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('pay_khcn')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('pay_salary_total')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('pay_salary')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('pay_machine')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('pay_normal')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('pay_mission')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('mission_lv1')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('mission_lv2')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('mission_lv3')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('mission_lv4')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('mission_lv5')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('pay_lab')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('pay_maintain')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('pay_univer')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('pay_improve_other')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('pay_other')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        // });
        // Schema::create('bieumau4', function (Blueprint $table) {
        //     $table->string('total')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_lv1')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_lv2')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_lv3')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_lv4')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_lv5')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_lab_1')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_lab_2')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_lab_3')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_lab_4')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_lab_5')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_lab_6')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_money_1')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_money_2')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_money_3')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_money_4')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_money_5')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_money_6')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('subject_money_7')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_job')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_job_1')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_job_2')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_job_3')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_job_4')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_job_5')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_lab_1')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_lab_2')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_lab_3')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_lab_4')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_lab_5')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_lab_6')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_money_1')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_money_2')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_money_3')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_money_4')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_money_5')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_money_6')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_money_7')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        // });
        // Schema::create('bieumau5', function (Blueprint $table) {
        //     $table->string('total')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('mission_lab_1')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('mission_lab_2')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('mission_lab_3')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('mission_lab_4')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('mission_lab_5')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('mission_lab_6')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('collaborate_1')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('collaborate_2')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('collaborate_3')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('collaborate_4')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('money_1')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('money_2')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('money_3')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('money_4')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('money_5')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('team_out')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('human_out')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('team_in')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('human_in')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_h1')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_h2')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        // });
        // Schema::create('bieumau6', function (Blueprint $table) {
        //     $table->string('total')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_award_vn')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_award_vn1')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_award_vn2')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_award_vn3')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_award_vn4')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_award_vn5')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_award_other')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_award_team')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_award_fm')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_award_male')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        //     $table->string('total_award_female')->default('1=&2=&3=&4=&5=&6=&7=&8=&9=')->change();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('bieumau2', function (Blueprint $table) {
            $table->string('total')->nullable()->change();
            $table->string('female_total')->nullable()->change();
            $table->string('nation_vn')->nullable()->change();
            $table->string('nation_kinh')->nullable()->change();
            $table->string('nation_other')->nullable()->change();
            $table->string('nation_foregin')->nullable()->change();
            $table->string('class_khtn')->nullable()->change();
            $table->string('class_khkt')->nullable()->change();
            $table->string('class_khyd')->nullable()->change();
            $table->string('class_khnn')->nullable()->change();
            $table->string('class_khxh')->nullable()->change();
            $table->string('class_khnv')->nullable()->change();
            $table->string('class_other')->nullable()->change();
        });
        Schema::create('bieumau3', function (Blueprint $table) {
            $table->string('total')->nullable()->change();
            $table->string('pay_improve_khcn')->nullable()->change();
            $table->string('pay_khcn')->nullable()->change();
            $table->string('pay_salary_total')->nullable()->change();
            $table->string('pay_salary')->nullable()->change();
            $table->string('pay_machine')->nullable()->change();
            $table->string('pay_normal')->nullable()->change();
            $table->string('pay_mission')->nullable()->change();
            $table->string('mission_lv1')->nullable()->change();
            $table->string('mission_lv2')->nullable()->change();
            $table->string('mission_lv3')->nullable()->change();
            $table->string('mission_lv4')->nullable()->change();
            $table->string('mission_lv5')->nullable()->change();
            $table->string('pay_lab')->nullable()->change();
            $table->string('pay_maintain')->nullable()->change();
            $table->string('pay_univer')->nullable()->change();
            $table->string('pay_improve_other')->nullable()->change();
            $table->string('pay_other')->nullable()->change();
        });
        Schema::create('bieumau4', function (Blueprint $table) {
            $table->string('total')->nullable()->change();
            $table->string('subject_lv1')->nullable()->change();
            $table->string('subject_lv2')->nullable()->change();
            $table->string('subject_lv3')->nullable()->change();
            $table->string('subject_lv4')->nullable()->change();
            $table->string('subject_lv5')->nullable()->change();
            $table->string('subject_lab_1')->nullable()->change();
            $table->string('subject_lab_2')->nullable()->change();
            $table->string('subject_lab_3')->nullable()->change();
            $table->string('subject_lab_4')->nullable()->change();
            $table->string('subject_lab_5')->nullable()->change();
            $table->string('subject_lab_6')->nullable()->change();
            $table->string('subject_money_1')->nullable()->change();
            $table->string('subject_money_2')->nullable()->change();
            $table->string('subject_money_3')->nullable()->change();
            $table->string('subject_money_4')->nullable()->change();
            $table->string('subject_money_5')->nullable()->change();
            $table->string('subject_money_6')->nullable()->change();
            $table->string('subject_money_7')->nullable()->change();
            $table->string('total_job')->nullable()->change();
            $table->string('total_job_1')->nullable()->change();
            $table->string('total_job_2')->nullable()->change();
            $table->string('total_job_3')->nullable()->change();
            $table->string('total_job_4')->nullable()->change();
            $table->string('total_job_5')->nullable()->change();
            $table->string('total_lab_1')->nullable()->change();
            $table->string('total_lab_2')->nullable()->change();
            $table->string('total_lab_3')->nullable()->change();
            $table->string('total_lab_4')->nullable()->change();
            $table->string('total_lab_5')->nullable()->change();
            $table->string('total_lab_6')->nullable()->change();
            $table->string('total_money_1')->nullable()->change();
            $table->string('total_money_2')->nullable()->change();
            $table->string('total_money_3')->nullable()->change();
            $table->string('total_money_4')->nullable()->change();
            $table->string('total_money_5')->nullable()->change();
            $table->string('total_money_6')->nullable()->change();
            $table->string('total_money_7')->nullable()->change();
        });
        Schema::create('bieumau5', function (Blueprint $table) {
            $table->string('total')->nullable()->change();
            $table->string('mission_lab_1')->nullable()->change();
            $table->string('mission_lab_2')->nullable()->change();
            $table->string('mission_lab_3')->nullable()->change();
            $table->string('mission_lab_4')->nullable()->change();
            $table->string('mission_lab_5')->nullable()->change();
            $table->string('mission_lab_6')->nullable()->change();
            $table->string('collaborate_1')->nullable()->change();
            $table->string('collaborate_2')->nullable()->change();
            $table->string('collaborate_3')->nullable()->change();
            $table->string('collaborate_4')->nullable()->change();
            $table->string('money_1')->nullable()->change();
            $table->string('money_2')->nullable()->change();
            $table->string('money_3')->nullable()->change();
            $table->string('money_4')->nullable()->change();
            $table->string('money_5')->nullable()->change();
            $table->string('team_out')->nullable()->change();
            $table->string('human_out')->nullable()->change();
            $table->string('team_in')->nullable()->change();
            $table->string('human_in')->nullable()->change();
            $table->string('total_h1')->nullable()->change();
            $table->string('total_h2')->nullable()->change();
        });
        Schema::create('bieumau6', function (Blueprint $table) {
            $table->string('total')->nullable()->change();
            $table->string('total_award_vn')->nullable()->change();
            $table->string('total_award_vn1')->nullable()->change();
            $table->string('total_award_vn2')->nullable()->change();
            $table->string('total_award_vn3')->nullable()->change();
            $table->string('total_award_vn4')->nullable()->change();
            $table->string('total_award_vn5')->nullable()->change();
            $table->string('total_award_other')->nullable()->change();
            $table->string('total_award_team')->nullable()->change();
            $table->string('total_award_fm')->nullable()->change();
            $table->string('total_award_male')->nullable()->change();
            $table->string('total_award_female')->nullable()->change();
        });

    }
}
