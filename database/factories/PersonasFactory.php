<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Persona>
 */
class PersonasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>$this ->faker->firstName(), // genera un nombre aleatorio para cada registrp
            'apellido_paterno'=>$this ->faker->lastName(), //genera un correo aleatorio
            'apellido_materno'=>$this ->faker->lastName(), //genera un password aleatorio
            'fecha_nacimiento'=>$this ->faker->date($format = 'Y/m/d', $max = 'now')         ];
    }
}
