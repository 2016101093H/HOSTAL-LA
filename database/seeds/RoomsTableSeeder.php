<?php

use Illuminate\Database\Seeder;


class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('rooms')->insert([
           
            'type' => 'Grande',
           
            'price' => 30,
            ]);
            DB::table('rooms')->insert([
                'type' => 'Pequeño',
                
                'price' => 10,
        ]);
        DB::table('rooms')->insert([
            'type' => 'Mediano',
            
            'price' => 20,
    ]);
        
    }
}
