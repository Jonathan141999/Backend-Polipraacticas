<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Seeder;

class PublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        Publication::truncate();
        $faker = \Faker\Factory::create();
        // Crear publicaiones ficticias
        for ($i = 0; $i < 3; $i++) {
            Publication::create([
                'affair' => $faker->sentence,
                'details' => $faker->paragraph,
                'hour'=>$faker->sentence,
                'location'=>$faker->paragraph,
                'phone'=>$faker->phoneNumber,
                'publication_date'=>$faker->date($format = 'Y-m-d', $max = 'now')
            ]);
        }
    }
}
