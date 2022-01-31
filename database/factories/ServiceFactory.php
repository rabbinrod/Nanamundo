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
            'slug' => Str::slug($title),
            'precio' => $this->faker->randomNumber($nbDigits = 3),
            'user_id' => 1,
        ];
    }
}
