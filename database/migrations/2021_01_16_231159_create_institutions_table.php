<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->string('state',11);
            $table->string('name',120);
            $table->string('description',120)->nullable();
            $table->timestamps();
        });


        DB::table('institutions')->insert(array('id'=>'1', 'state' => 'activado', 'name'=> 'Escuela De Posgrado-Gerens S.A.C.'));
        DB::table('institutions')->insert(array('id'=>'2', 'state' => 'activado', 'name'=> 'Escuela de Postgrado Neumann Business School S.A.C.'));
        DB::table('institutions')->insert(array('id'=>'3', 'state' => 'activado', 'name'=> 'Facultad de Teología Pontificia y Civil de Lima'));
        DB::table('institutions')->insert(array('id'=>'4', 'state' => 'activado', 'name'=> 'Pontificia Universidad Católica del Perú'));
        DB::table('institutions')->insert(array('id'=>'5', 'state' => 'activado', 'name'=> 'Universidad Andina del Cusco'));
        DB::table('institutions')->insert(array('id'=>'6', 'state' => 'activado', 'name'=> 'Universidad Antonio Ruiz de Montoya'));
        DB::table('institutions')->insert(array('id'=>'7', 'state' => 'activado', 'name'=> 'Universidad Autónoma de Ica'));
        DB::table('institutions')->insert(array('id'=>'8', 'state' => 'activado', 'name'=> 'Universidad Autónoma del Perú'));
        DB::table('institutions')->insert(array('id'=>'9', 'state' => 'activado', 'name'=> 'Universidad Católica de Santa María'));
        DB::table('institutions')->insert(array('id'=>'10', 'state' => 'activado', 'name'=> 'Universidad Católica de Trujillo Benedicto XVI'));
        DB::table('institutions')->insert(array('id'=>'11', 'state' => 'activado', 'name'=> 'Universidad Católica San Pablo'));
        DB::table('institutions')->insert(array('id'=>'12', 'state' => 'activado', 'name'=> 'Universidad Católica Santo Toribio de Mogrovejo'));
        DB::table('institutions')->insert(array('id'=>'13', 'state' => 'activado', 'name'=> 'Universidad Católica Sedes Sapientiae'));
        DB::table('institutions')->insert(array('id'=>'14', 'state' => 'activado', 'name'=> 'Universidad Científica del Sur'));
        DB::table('institutions')->insert(array('id'=>'15', 'state' => 'activado', 'name'=> 'Universidad Continental'));
        DB::table('institutions')->insert(array('id'=>'16', 'state' => 'activado', 'name'=> 'Universidad César Vallejo'));
        DB::table('institutions')->insert(array('id'=>'17', 'state' => 'activado', 'name'=> 'Universidad de Ciencias y Artes de América Latina'));
        DB::table('institutions')->insert(array('id'=>'18', 'state' => 'activado', 'name'=> 'Universidad de Ciencias y Humanidades'));
        DB::table('institutions')->insert(array('id'=>'19', 'state' => 'activado', 'name'=> 'Universidad de Huánuco'));
        DB::table('institutions')->insert(array('id'=>'20', 'state' => 'activado', 'name'=> 'Universidad de Ingeniería y Tecnología'));
        DB::table('institutions')->insert(array('id'=>'21', 'state' => 'activado', 'name'=> 'Universidad de Lima'));
        DB::table('institutions')->insert(array('id'=>'22', 'state' => 'activado', 'name'=> 'Universidad de Piura'));
        DB::table('institutions')->insert(array('id'=>'23', 'state' => 'activado', 'name'=> 'Universidad de San Martín de Porres'));
        DB::table('institutions')->insert(array('id'=>'24', 'state' => 'activado', 'name'=> 'Universidad del Pacífico'));
        DB::table('institutions')->insert(array('id'=>'25', 'state' => 'activado', 'name'=> 'Universidad ESAN'));
        DB::table('institutions')->insert(array('id'=>'26', 'state' => 'activado', 'name'=> 'Universidad Femenina del Sagrado Corazón'));
        DB::table('institutions')->insert(array('id'=>'27', 'state' => 'activado', 'name'=> 'Universidad Jaime Bausate y Meza'));
        DB::table('institutions')->insert(array('id'=>'28', 'state' => 'activado', 'name'=> 'Universidad La Salle'));
        DB::table('institutions')->insert(array('id'=>'29', 'state' => 'activado', 'name'=> 'Universidad Le Cordon Bleu S.A.C.'));
        DB::table('institutions')->insert(array('id'=>'30', 'state' => 'activado', 'name'=> 'Universidad Marcelino Champagnat'));
        DB::table('institutions')->insert(array('id'=>'31', 'state' => 'activado', 'name'=> 'Universidad María Auxiliadora'));
        DB::table('institutions')->insert(array('id'=>'32', 'state' => 'activado', 'name'=> 'Universidad Nacional Agraria de la Selva'));
        DB::table('institutions')->insert(array('id'=>'33', 'state' => 'activado', 'name'=> 'Universidad Nacional Agraria la Molina'));
        DB::table('institutions')->insert(array('id'=>'34', 'state' => 'activado', 'name'=> 'Universidad Nacional Amazónica de Madre de Dios'));
        DB::table('institutions')->insert(array('id'=>'35', 'state' => 'activado', 'name'=> 'Universidad Nacional Autónoma Altoandina de Tarma'));
        DB::table('institutions')->insert(array('id'=>'36', 'state' => 'activado', 'name'=> 'Universidad Nacional Autónoma de Alto Amazonas'));
        DB::table('institutions')->insert(array('id'=>'37', 'state' => 'activado', 'name'=> 'Universidad Nacional Autónoma de Chota'));
        DB::table('institutions')->insert(array('id'=>'38', 'state' => 'activado', 'name'=> 'Universidad Nacional Autónoma de Huanta'));
        DB::table('institutions')->insert(array('id'=>'39', 'state' => 'activado', 'name'=> 'Universidad Nacional Autónoma de Tayacaja “Daniel Hernández Morillo”'));
        DB::table('institutions')->insert(array('id'=>'40', 'state' => 'activado', 'name'=> 'Universidad Nacional Daniel Alcides Carrión'));
        DB::table('institutions')->insert(array('id'=>'41', 'state' => 'activado', 'name'=> 'Universidad Nacional de Barranca'));
        DB::table('institutions')->insert(array('id'=>'42', 'state' => 'activado', 'name'=> 'Universidad Nacional de Cajamarca'));
        DB::table('institutions')->insert(array('id'=>'43', 'state' => 'activado', 'name'=> 'Universidad Nacional de Cañete'));
        DB::table('institutions')->insert(array('id'=>'44', 'state' => 'activado', 'name'=> 'Universidad Nacional de Educación Enrique Guzmán y Valle'));
        DB::table('institutions')->insert(array('id'=>'45', 'state' => 'activado', 'name'=> 'Universidad Nacional de Frontera'));
        DB::table('institutions')->insert(array('id'=>'46', 'state' => 'activado', 'name'=> 'Universidad Nacional de Huancavelica'));
        DB::table('institutions')->insert(array('id'=>'47', 'state' => 'activado', 'name'=> 'Universidad Nacional de Ingeniería'));
        DB::table('institutions')->insert(array('id'=>'48', 'state' => 'activado', 'name'=> 'Universidad Nacional de Jaén'));
        DB::table('institutions')->insert(array('id'=>'49', 'state' => 'activado', 'name'=> 'Universidad Nacional de Juliaca'));
        DB::table('institutions')->insert(array('id'=>'50', 'state' => 'activado', 'name'=> 'Universidad Nacional de la Amazonía Peruana'));
        DB::table('institutions')->insert(array('id'=>'51', 'state' => 'activado', 'name'=> 'Universidad Nacional de Moquegua'));
        DB::table('institutions')->insert(array('id'=>'52', 'state' => 'activado', 'name'=> 'Universidad Nacional de Piura'));
        DB::table('institutions')->insert(array('id'=>'53', 'state' => 'activado', 'name'=> 'Universidad Nacional de San Agustín'));
        DB::table('institutions')->insert(array('id'=>'54', 'state' => 'activado', 'name'=> 'Universidad Nacional de San Antonio Abad del Cusco'));
        DB::table('institutions')->insert(array('id'=>'55', 'state' => 'activado', 'name'=> 'Universidad Nacional de San Cristóbal de Huamanga'));
        DB::table('institutions')->insert(array('id'=>'56', 'state' => 'activado', 'name'=> 'Universidad Nacional de San Martín'));
        DB::table('institutions')->insert(array('id'=>'57', 'state' => 'activado', 'name'=> 'Universidad Nacional de Trujillo'));
        DB::table('institutions')->insert(array('id'=>'58', 'state' => 'activado', 'name'=> 'Universidad Nacional de Tumbes'));
        DB::table('institutions')->insert(array('id'=>'59', 'state' => 'activado', 'name'=> 'Universidad Nacional de Ucayali'));
        DB::table('institutions')->insert(array('id'=>'60', 'state' => 'activado', 'name'=> 'Universidad Nacional del Altiplano'));
        DB::table('institutions')->insert(array('id'=>'61', 'state' => 'activado', 'name'=> 'Universidad Nacional del Callao'));
        DB::table('institutions')->insert(array('id'=>'62', 'state' => 'activado', 'name'=> 'Universidad Nacional del Centro del Perú'));
        DB::table('institutions')->insert(array('id'=>'63', 'state' => 'activado', 'name'=> 'Universidad Nacional del Santa'));
        DB::table('institutions')->insert(array('id'=>'64', 'state' => 'activado', 'name'=> 'Universidad Nacional Federico Villarreal'));
        DB::table('institutions')->insert(array('id'=>'65', 'state' => 'activado', 'name'=> 'Universidad Nacional Hermilio Valdizán'));
        DB::table('institutions')->insert(array('id'=>'66', 'state' => 'activado', 'name'=> 'Universidad Nacional Intercultural de la Amazonia'));
        DB::table('institutions')->insert(array('id'=>'67', 'state' => 'activado', 'name'=> 'Universidad Nacional Intercultural de la selva central Juan Santos Atahualpa'));
        DB::table('institutions')->insert(array('id'=>'68', 'state' => 'activado', 'name'=> 'Universidad Nacional Intercultural de Quillabamba'));
        DB::table('institutions')->insert(array('id'=>'69', 'state' => 'activado', 'name'=> 'Universidad Nacional Intercultural Fabiola Salazar Leguía de Bagua'));
        DB::table('institutions')->insert(array('id'=>'70', 'state' => 'activado', 'name'=> 'Universidad Nacional Jorge Basadre Grohmann'));
        DB::table('institutions')->insert(array('id'=>'71', 'state' => 'activado', 'name'=> 'Universidad Nacional José Faustino Sánchez Carrión'));
        DB::table('institutions')->insert(array('id'=>'72', 'state' => 'activado', 'name'=> 'Universidad Nacional José María Arguedas'));
        DB::table('institutions')->insert(array('id'=>'73', 'state' => 'activado', 'name'=> 'Universidad Nacional Mayor de San Marcos'));
        DB::table('institutions')->insert(array('id'=>'74', 'state' => 'activado', 'name'=> 'Universidad Nacional Micaela Bastidas de Apurímac'));
        DB::table('institutions')->insert(array('id'=>'75', 'state' => 'activado', 'name'=> 'Universidad Nacional Santiago Antúnez de Mayolo'));
        DB::table('institutions')->insert(array('id'=>'76', 'state' => 'activado', 'name'=> 'Universidad Nacional Tecnológica De Lima Sur'));
        DB::table('institutions')->insert(array('id'=>'77', 'state' => 'activado', 'name'=> 'Universidad Nacional Toribio Rodríguez de Mendoza de Amazonas'));
        DB::table('institutions')->insert(array('id'=>'78', 'state' => 'activado', 'name'=> 'Universidad para el Desarrollo Andino'));
        DB::table('institutions')->insert(array('id'=>'79', 'state' => 'activado', 'name'=> 'Universidad Peruana Cayetano Heredia'));
        DB::table('institutions')->insert(array('id'=>'80', 'state' => 'activado', 'name'=> 'Universidad Peruana de Ciencias Aplicadas'));
        DB::table('institutions')->insert(array('id'=>'81', 'state' => 'activado', 'name'=> 'Universidad Peruana Los Andes'));
        DB::table('institutions')->insert(array('id'=>'82', 'state' => 'activado', 'name'=> 'Universidad Peruana Unión'));
        DB::table('institutions')->insert(array('id'=>'83', 'state' => 'activado', 'name'=> 'Universidad Privada Antenor Orrego'));
        DB::table('institutions')->insert(array('id'=>'84', 'state' => 'activado', 'name'=> 'Universidad Privada de Huancayo Franklin Roosevelt'));
        DB::table('institutions')->insert(array('id'=>'85', 'state' => 'activado', 'name'=> 'Universidad Privada de Tacna'));
        DB::table('institutions')->insert(array('id'=>'86', 'state' => 'activado', 'name'=> 'Universidad Privada del Norte'));
        DB::table('institutions')->insert(array('id'=>'87', 'state' => 'activado', 'name'=> 'Universidad Privada Norbert Wiener'));
        DB::table('institutions')->insert(array('id'=>'88', 'state' => 'activado', 'name'=> 'Universidad Privada Peruano Alemana'));
        DB::table('institutions')->insert(array('id'=>'89', 'state' => 'activado', 'name'=> 'Universidad Privada San Juan Bautista'));
        DB::table('institutions')->insert(array('id'=>'90', 'state' => 'activado', 'name'=> 'Universidad Ricardo Palma'));
        DB::table('institutions')->insert(array('id'=>'91', 'state' => 'activado', 'name'=> 'Universidad San Ignacio de Loyola'));
        DB::table('institutions')->insert(array('id'=>'92', 'state' => 'activado', 'name'=> 'Universidad Señor de Sipán'));
        DB::table('institutions')->insert(array('id'=>'93', 'state' => 'activado', 'name'=> 'Universidad Tecnológica de los Andes'));
        DB::table('institutions')->insert(array('id'=>'94', 'state' => 'activado', 'name'=> 'Universidad Tecnológica del Perú'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
