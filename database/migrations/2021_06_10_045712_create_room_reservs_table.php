<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomReservsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_reservs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reservation_id')->constrained('reservations','id')->cascadeOnDelete();
            $table->foreignId('room_id')->constrained('rooms','id')->cascadeOnDelete();
            $table->decimal('room_total');
            $table->decimal('bed_total');
            $table->decimal('final_total');
            $table->integer('num_of_guests');
            $table->enum('Is_active',['Active','Non_Active']); // check this one
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_reservs');
    }
}
