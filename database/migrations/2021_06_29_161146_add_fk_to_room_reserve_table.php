<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToRoomReserveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room_reservs', function (Blueprint $table) {
            $table->foreignId('guest_id')->constrained('guests', 'id')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users', 'id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room_reservs', function (Blueprint $table) {
            $table->dropConstrainedForeignId('guest_id');
            $table->dropConstrainedForeignId('user_id');
        });
    }
}
