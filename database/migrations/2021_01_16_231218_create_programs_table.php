<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('state',11);
            $table->string('name',20);
            $table->string('description',120)->nullable();
            $table->timestamps();
        });

        DB::table('programs')->insert(array('id'=>'1', 'state'=>'activado', 'name'=>'work and travel'));
        DB::table('programs')->insert(array('id'=>'2', 'state'=>'activado', 'name'=>'internship'));
        DB::table('programs')->insert(array('id'=>'3', 'state'=>'activado', 'name'=>'trainee'));
        DB::table('programs')->insert(array('id'=>'4', 'state'=>'activado', 'name'=>'au pair'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
