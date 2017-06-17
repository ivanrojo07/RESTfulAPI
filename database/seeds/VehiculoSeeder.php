<?php

use Illuminate\Database\Seeder;
use App\Vehiculo;
use App\Fabricante;
use Illuminate\Database\Eloquent;

class VehiculoSeeder extends Seeder
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
        
        $cantidad = App\Fabricante::all()->count();

        for($i = 0; $i < $cantidad; $i++)
        {
            App\Vehiculo::create([

                'color'=> $faker->safeColorName(),
                'cilindraje'=> $faker->randomFloat(2, 100, 2),
                'potencia'=> $faker->randomFloat(2, 100, 2),
                'peso'=>$faker->randomNumber(1),
                'fabricante_id'=> $faker->numberBetween(1,$cantidad)
                ]);
        }


    }
    
}
