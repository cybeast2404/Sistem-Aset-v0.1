<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AssetItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_items', function (Blueprint $table) {

            $table->engine = 'InnoDB';


            $table->increments('id');
            $table->integer('asset_id')->unsigned()->nullable(); //make a relationship with asset.id table.
            $table->string('asset_no'); //fill in form 
            $table->string('location'); //fill in form
            $table->string('date_purchase'); //fill in form as type=date
            $table->decimal('price',6,2); //fill in form
            
         
            $table->timestamps();


             $table->foreign('asset_id')->references('id')->on('assets');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_items');
    }
}
