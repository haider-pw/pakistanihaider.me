<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePortfoliosTableAddRemoveColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolio',function(Blueprint $table){
           if(Schema::hasColumns('portfolio',['title','website','company','tools','cover_image','images','description'])){
               $table->dropColumn('title');
               $table->dropColumn('website');
               $table->dropColumn('company');
               $table->dropColumn('tools');
               $table->dropColumn('cover_image');
               $table->dropColumn('images');
               $table->dropColumn('description');
           }

           if(!Schema::hasColumn('portfolio','portfolio_type_id')){
               $table->integer('portfolio_type_id')->unsigned()->after('resume_id');

               $table->foreign('portfolio_type_id')->references('id')->on('portfolio_type')->onDelete('cascade');
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
        Schema::table('portfolio',function(Blueprint $table){
            if(!Schema::hasColumns('portfolio',['title','website','company','tools','cover_image','images','description'])){
                $table->string('title');
                $table->string('website')->nullable();
                $table->string('company')->nullable(); //Company Under which this project was built on.
                $table->text('tools')->nullable(); //Technology and Tools Used in the project
                $table->string('cover_image')->nullable();
                $table->text('images')->nullable(); //Json Containing all the Images/videos will be shown inside the details page.
                $table->text('description')->nullable();
            }

            //If has Column remove it.
            if(Schema::hasColumn('portfolio','portfolio_type_id')){
                $table->dropForeign(['portfolio_type_id']);
                $table->dropColumn('portfolio_type_id');
            }
        });
    }
}
