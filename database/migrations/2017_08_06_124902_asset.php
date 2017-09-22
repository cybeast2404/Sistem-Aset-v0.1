<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Asset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {

            $table->engine = 'InnoDB';


            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable(); // make a relationship with category_asset.id table.
            $table->string('name'); //in form
            $table->string('description'); // in form
            
            $table->timestamps();

             $table->foreign('category_id')->references('id')->on('category_assets');


       
        });

         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('assets');
    }
}
