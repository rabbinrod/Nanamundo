<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Image;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = Service::factory(4)->create();

        foreach ($services as $service){
            Image::factory(1)->create([
                'imageable_id' => $service->id,
                'imageable_type' => 'App\Models\Service'
            ]);
        }
    }
}
