<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\User;
use App\Models\Precio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();

        return [
            'name' => $title,
            'descripcion' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement([Service::PENDIENTE, Service::APROBADO, Service::RECHAZADO, Service::FINALIZADO]),
            'slug' => Str::slug($title),
            'user_id' => 1,
            'precio_id' => Precio::all()->random()->id,
        ];
    }
}
