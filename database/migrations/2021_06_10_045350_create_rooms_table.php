<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_name')->unique();
            $table->enum('room_type',['Superior Room','Deluxe Room', 'Single Room','Guest House']);
            $table->enum('bedding',['Single','Double', 'Triple','Quad']);     
            $table->text('description');
            $table->decimal('current_price',10,2);
            $table->string('image')->nullable();    
            $table->integer('max_guest');
            $table->integer('children');
            $table->integer('reviwes')->nullable();
            $table->integer('adults');   
            $table->integer('stars');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
