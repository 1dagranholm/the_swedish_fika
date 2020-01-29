<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            //Munkar:
            ['name' => 'Solmunk',
            'flavor' => 'vanilj',
            'type' => 'Munk',
            'price' => '20'],
            
            ['name' => 'Konstig munk',
            'flavor' => 'flingor',
            'type' => 'Munk',
            'price' => '35'],

            ['name' => 'Semmelmunk',
            'flavor' => 'Mandelmassagrädde',
            'type' => 'Munk',
            'price' => '40'],

            ['name' => 'Pepparkaksmunk',
            'flavor' => 'Pepparkaka',
            'type' => 'Munk',
            'price' => '25'],

            ['name' => 'Berlinermunk',
            'flavor' => 'Hallon, Äpple',
            'type' => 'Munk',
            'price' => '40'],

            //Bullar
            ['name' => 'Kanelbulle',
            'flavor' => 'Kanel',
            'type' => 'Bulle',
            'price' => '25'],

            ['name' => 'Solbulle',
            'flavor' => 'Vanilj',
            'type' => 'Bulle',
            'price' => '30'],

            ['name' => 'Hallonbulle',
            'flavor' => 'Hallon',
            'type' => 'Bulle',
            'price' => '30'],

            ['name' => 'Kardemummabulle',
            'flavor' => 'Kardemumma',
            'type' => 'Bulle',
            'price' => '25'],

            //Dryck
            ['name' => 'Bryggkaffe',
            'flavor' => '',
            'type' => 'Dryck',
            'price' => '25'],

            ['name' => 'Cappuchino',
            'flavor' => '',
            'type' => 'Dryck',
            'price' => '35'],

            ['name' => 'Läsk',
            'flavor' => '',
            'type' => 'Dryck',
            'price' => '25']

        ]);
    }
}
