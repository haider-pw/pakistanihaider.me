<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjectsTools extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_tools',function(Blueprint $table){
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('tool_id')->unsigned();

            //Adding Foreign Keys
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('tool_id')->references('id')->on('tools');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_tools');
    }
}
