<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('services');
        Storage::makeDirectory('services');
        // \App\Models\User::factory(10)->create();

        $this->call(UserSeeder::class);
        $this->call(PrecioSeeder::class);
        $this->call(ServiceSeeder::class);
    }
}
