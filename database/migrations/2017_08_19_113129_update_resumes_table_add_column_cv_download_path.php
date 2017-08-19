<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateResumesTableAddColumnCvDownloadPath extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resumes',function(Blueprint $table){
           if(!Schema::hasColumn('resumes','cv_path')){
               $table->string('cv_path')->nullable()->after('position');
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
            if(Schema::hasColumn('resumes','cv_path')){
                $table->dropColumn('cv_path');
            }
        });
    }
}
