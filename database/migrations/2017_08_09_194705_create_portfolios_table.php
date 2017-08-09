<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('website')->nullable();
            $table->string('company')->nullable(); //Company Under which this project was built on.
            $table->text('tools')->nullable(); //Technology and Tools Used in the project
            $table->string('cover_image')->nullable();
            $table->text('images')->nullable(); //Json Containing all the Images/videos will be shown inside the details page.
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolio');
    }
}
