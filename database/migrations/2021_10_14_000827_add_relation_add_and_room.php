<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationAddAndRoom extends Migration
{
    
    public function up()
    {
        Schema::create('add_room', function (Blueprint $table) {
            $table->integer('room_id');
            $table->integer('add_id');
            
        });
    }
  
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
