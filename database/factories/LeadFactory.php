<?php

namespace Database\Factories;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lead::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dni'                       => $this->faker->randomNumber(8), 
            'name'                      => $this->faker->name,
            'surnames'                  => $this->faker->lastName,
            'mobile'                    => $this->faker->randomNumber(9),
            'email'                     => $this->faker->email,
            'career_id'                 => $this->faker->numberBetween(1,35),
            'semester'                  => 'X',
            'institution_id'            => $this->faker->numberBetween(1,94),
            'english_level'              => 'intermedio',
            'program_id'                => $this->faker->numberBetween(1,4),
            'communication_channel'     => 'facebook',
            'schedule_start'            => $this->faker->numberBetween(1,11),
            'schedule_start_meridiem'   => 'am',
            'schedule_end'              => $this->faker->numberBetween(1,11),
            'schedule_end_meridiem'     => 'pm',
            'commentary'                => $this->faker->text(80),
            'profile'                   => $this->faker->url,
            'pipeline_dispatch'         => 'no',    
            'table_name'                => 'calificados',
        ];

        // 'englis_level'              => 'básico',
        // 'englis_level'              => 'intermedio',
        // 'englis_level'              => 'avanzado',
        // 'englis_level'              => 'ninguno',

        // 'communication_channel'     => 'correo',
        // 'communication_channel'     => 'móbil',
        // 'communication_channel'     => 'facebook',
        // 'communication_channel'     => 'instagram',
        // 'communication_channel'     => 'whatsapp',

        // 'table_name'                => 'aceptados',
        // 'table_name'                => 'edad',
        // 'table_name'                => 'ingles',
        
    }
}
