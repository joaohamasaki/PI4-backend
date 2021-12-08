<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddsTable extends Migration
{
    public function up()
    {
        Schema::create('adds', function (Blueprint $table) {
            $table->id();
            $table->string('name');            
            $table ->decimal('price', 9,2 );
            $table->timestamps();
        });
    }
   
    public function down()
    {
        Schema::dropIfExists('adds');
    }
}
