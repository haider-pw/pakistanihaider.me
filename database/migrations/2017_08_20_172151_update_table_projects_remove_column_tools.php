<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableProjectsRemoveColumnTools extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects',function (Blueprint $table){
            if(Schema::hasColumn('projects','tools')){
                $table->dropColumn('tools');
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
        Schema::table('projects',function (Blueprint $table){
            if(!Schema::hasColumn('projects','tools')){
                $table->string('tools')->nullable();
            }
        });
    }
}
