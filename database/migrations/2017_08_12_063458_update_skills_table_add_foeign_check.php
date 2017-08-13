<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSkillsTableAddFoeignCheck extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('skills',function (Blueprint $table){
            $table->foreign('skill_id')->references('id')->on('sys_skills')->onDelete('cascade');
        });

        //Foreign Checks

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skills',function (Blueprint $table){
            $table->dropForeign('skill_id');
        });
    }
}
