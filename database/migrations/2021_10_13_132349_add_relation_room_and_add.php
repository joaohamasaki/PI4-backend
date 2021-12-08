<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationRoomAndAdd extends Migration
{
    
    public function up()
    {
        Schema::create('room_add', function (Blueprint $table) {
            $table->integer('room_id');
            $table->integer('add_id');
            
        });
    }
  
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
