<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableSkillsAddColumnUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skills',function (Blueprint $table){
            if(!Schema::hasColumn('skills','user_id')){
                $table->integer('user_id')->unsigned()->after('skill_id');

                //Add Foreign
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skills',function (Blueprint $table){
            if(Schema::hasColumn('skills','user_id')){

                //Drop Foreign
                $table->dropForeign(['user_id']);

                //Drop Column
                $table->dropColumn('user_id');
            }
        });
    }
}
