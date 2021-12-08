<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostsTable extends Migration
{    
    public function up()
    {
        Schema::create('hosts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('number');
            $table->string('city');
            $table->string('state');
            $table->string('code');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hosts');
    }
}
