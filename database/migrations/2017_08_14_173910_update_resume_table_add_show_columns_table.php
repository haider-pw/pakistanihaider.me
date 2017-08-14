<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateResumeTableAddShowColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes_blocks_visibility',function (Blueprint $table){
            $table->increments('id');
            $table->integer('resume_id')->unsigned();
            $table->string('key');
            $table->string('value')->nullable()->default(1);
            $table->timestamps();

            //Foreign
            $table->foreign('resume_id')->references('id')->on('resumes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumes_blocks_visibility');
    }
}
