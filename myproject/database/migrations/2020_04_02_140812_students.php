<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //if you want to create or insert anything it will be inside up function
        Schema::create('Students',function(Blueprint $table){
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('email')->unique();
          $table->rememberToken();
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
        //if you want to drop or delete anything it will be inside up function
        Schema::dropIfExists('Students');
    }
}
