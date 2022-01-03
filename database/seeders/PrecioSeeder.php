<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Precio;

class PrecioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Precio::create([
            'name' => 'Ocasional por hora',
            'value' => 100
        ]);

        Precio::create([
            'name' => 'Semanal por hora',
            'value' => 90
        ]);

        Precio::create([
            'name' => 'Mensual por hora',
            'value' => 80
        ]);
    }
}
