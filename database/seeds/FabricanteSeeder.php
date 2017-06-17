<?php

use Illuminate\Database\Seeder;
use App\Fabricante;
use Illuminate\Database\Eloquent;


class FabricanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker\Factory::create();
        for($i = 0; $i <3; $i++)
        {
            App\Fabricante::create([

                'nombre'=> $faker->word(),
                'telefono'=> $faker->randomNumber(7)
                ]);
        }


    }
    
}
