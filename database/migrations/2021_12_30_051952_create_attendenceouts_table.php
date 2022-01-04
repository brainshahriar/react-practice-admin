<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendenceoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendenceouts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('out_time');
            $table->string('out_date');
            $table->string('out_status')->nullable();
            $table->text('out_reason')->nullable();
            $table->string('last_name_and_date');
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
        Schema::dropIfExists('attendenceouts');
    }
}
