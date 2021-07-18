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
            $table->string('slug')->unique();
            $table->enum('room_type',['Superior Room','Deluxe Room', 'Single Room','Guest House']);
            $table->enum('bedding',['Single','Double', 'Triple','Quad']);     
            $table->text('description');
            $table->enum('Bathroom',['Separate','Double']);
            $table->enum('Is_active',['Active','Non_Active']); // check this one
            $table->string('image')->nullable();    
            $table->integer('max_guest');
            $table->integer('children');
            $table->string('room_size')->nullable(); 
            $table->integer('reviwes')->nullable();
            $table->decimal('room_price',10,2)->nullable(); 
            $table->decimal('quentity',10,2)->nullable(); 
            $table->decimal('final_total',10,2)->nullable(); 
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
