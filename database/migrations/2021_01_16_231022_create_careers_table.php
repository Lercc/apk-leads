<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('state',11);
            $table->string('name',120);
            $table->string('description',120)->nullable();
            $table->timestamps();
        });

        DB::table('careers')->insert(array('id'=>'1', 'state' => 'activado', 'name'=>'Enfermeria', 'description'=>'Ciencias de la Salud'));
        DB::table('careers')->insert(array('id'=>'2', 'state' => 'activado', 'name'=>'Medicina Humana', 'description'=>'Ciencias de la Salud'));

        DB::table('careers')->insert(array('id'=>'3', 'state' => 'activado', 'name'=>'Arquitectura', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'4', 'state' => 'activado', 'name'=>'Ingeniería Civil', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'5', 'state' => 'activado', 'name'=>'Ingeniería de Minas', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'6', 'state' => 'activado', 'name'=>'Ingeniería de Sistemas', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'7', 'state' => 'activado', 'name'=>'Ingeniería Eléctrica y Electrónica', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'8', 'state' => 'activado', 'name'=>'Ingeniería Mecánica', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'9', 'state' => 'activado', 'name'=>'Ingeniería Metalúrgica y de Minerales', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'10', 'state' => 'activado', 'name'=>'Ingeniería Química', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'11', 'state' => 'activado', 'name'=>'Ingeniería Química Industrial', 'description'=>'Arquitectura e Ingenierías'));
        DB::table('careers')->insert(array('id'=>'12', 'state' => 'activado', 'name'=>'Ingeniería Química Ambiental', 'description'=>'Arquitectura e Ingenierías'));

        DB::table('careers')->insert(array('id'=>'13', 'state' => 'activado', 'name'=>'Ciencias de la Administración', 'description'=>'Ciencias Administrativas Contables y Económicas'));
        DB::table('careers')->insert(array('id'=>'14', 'state' => 'activado', 'name'=>'Contabilidad', 'description'=>'Ciencias Administrativas Contables y Económicas'));
        DB::table('careers')->insert(array('id'=>'15', 'state' => 'activado', 'name'=>'Economía', 'description'=>'Ciencias Administrativas Contables y Económicas'));
        
        DB::table('careers')->insert(array('id'=>'16', 'state' => 'activado', 'name'=>'Antropología', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'17', 'state' => 'activado', 'name'=>'Ciencias de la Computación', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'18', 'state' => 'activado', 'name'=>'Educación Inicial', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'19', 'state' => 'activado', 'name'=>'Educación Primaria', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'20', 'state' => 'activado', 'name'=>'Educación Filosofía, Ciencias Sociales y Relaciones Humanas', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'21', 'state' => 'activado', 'name'=>'Educación Lengua, Literatura y Comunicación', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'22', 'state' => 'activado', 'name'=>'Educación Ciencias Naturales y Ambientales', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'23', 'state' => 'activado', 'name'=>'Educación Ciencias Matemáticas e Informática', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'24', 'state' => 'activado', 'name'=>'Educación Física y Psicomotricidad', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'25', 'state' => 'activado', 'name'=>'Sociología', 'description'=>'Ciencias sociales y educación'));
        DB::table('careers')->insert(array('id'=>'26', 'state' => 'activado', 'name'=>'Trabajo Social', 'description'=>'Ciencias sociales y educación'));

        DB::table('careers')->insert(array('id'=>'27', 'state' => 'activado', 'name'=>'Agronomía', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'28', 'state' => 'activado', 'name'=>'Ciencias Forestales y del Ambiente', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'29', 'state' => 'activado', 'name'=>'Zootecnia', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'30', 'state' => 'activado', 'name'=>'Ingeniería en Industrias Alimentarias', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'31', 'state' => 'activado', 'name'=>'Ingeniería Agroindutrial - Tarma', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'32', 'state' => 'activado', 'name'=>'Adm de Negocios - Tarma', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'33', 'state' => 'activado', 'name'=>'Hoteleria y turismo - Tarma', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'34', 'state' => 'activado', 'name'=>'Agronomía Tropical - Satipo', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'35', 'state' => 'activado', 'name'=>'Ingeniería Forestal Tropical - Satipo', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'36', 'state' => 'activado', 'name'=>'Industrias Alimentarias Tropical - Satipo', 'description'=>'Ciencias Agrarias y sedes'));
        DB::table('careers')->insert(array('id'=>'37', 'state' => 'activado', 'name'=>'Zootecnia Tropical  - Satipo', 'description'=>'Ciencias Agrarias y sedes'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careers');
    }
}
