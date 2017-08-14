<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableSysSkillsAddForeignColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sys_skills',function (Blueprint $table){
            if(!Schema::hasColumn('sys_skills','skill_group_id')){
                $table->integer('skill_group_id')->unsigned()->default(1)->after('id');

                //Add a Foreign Key
                $table->foreign('skill_group_id')->references('id')->on('skills_groups')->onDelete('cascade');
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


// alter table "users" add constraint users_email_unique unique ("email")


        Schema::table('sys_skills',function (Blueprint $table){
            if(Schema::hasColumn('sys_skills','skill_group_id')){
                $table->dropForeign('sys_skills_skill_group_id_foreign');
                $table->dropColumn('skill_group_id');
            }
        });
    }
}
