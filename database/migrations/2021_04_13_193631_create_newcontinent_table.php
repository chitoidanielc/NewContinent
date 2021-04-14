<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewcontinentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newcontinent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tara', 255);
            $table->string('capitala', 255);
            $table->float('locuitori', 10,2);
            $table->string('presedinte', 255);
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
        Schema::dropIfExists('newcontinent');
    }
}
