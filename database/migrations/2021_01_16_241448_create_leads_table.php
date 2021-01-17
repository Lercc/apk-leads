<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('dni',8)->unique();
            $table->string('name',40);
            $table->string('surnames',60);
            $table->string('mobile',9)->nullable()->nullable();
            $table->string('email')->unique();
            $table->bigInteger('career_id')->unsigned();
            $table->string('semester',9);
            $table->bigInteger('institution_id')->unsigned();
            $table->string('english_level',20);
            $table->bigInteger('program_id')->unsigned();
            $table->string('communication_channel',40);

            $table->integer('schedule_start')->length(2)->unsigned();
            $table->string('schedule_start_meridiem',2);
            $table->integer('schedule_end')->length(2)->unsigned();
            $table->string('schedule_end_meridiem',2);

            $table->string('commentary',120)->nullable();
            $table->string('profile',120)->nullable();

            $table->string('pipeline_dispatch',2);
            $table->string('table_name',40);
            $table->timestamps();

            $table->foreign('career_id')->references('id')->on('careers');
            $table->foreign('institution_id')->references('id')->on('institutions');
            $table->foreign('program_id')->references('id')->on('programs');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
}
