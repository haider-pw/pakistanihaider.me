<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateResumesTableAddColumnMaxSkillsGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resumes',function(Blueprint $table){
            if(!Schema::hasColumn('resumes','max_skills_groups_boxes'))
            {
                $table->string('max_skills_groups_boxes')->default(1)->after('available');
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
        Schema::table('resumes',function(Blueprint $table){
            if(Schema::hasColumn('resumes','max_skills_groups_boxes'))
            {
                $table->dropColumn('max_skills_groups_boxes');
            }
        });
    }
}
