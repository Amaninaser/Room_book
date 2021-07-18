<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('arrival');
            $table->date('departure');
            $table->string('details');
            $table->enum('Is_active',['Active','Non_Active'])->nullable(); // check this one
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->nullable()->references('id')->on('rooms');
            $table->integer('num_of_guests')->nullable();
            $table->decimal('final_total')->nullable();
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
        Schema::dropIfExists('reservations');
    }
}
