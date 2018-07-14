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
           
            'type' => 'Matrimoniales',
           
            'price' => 60,
            ]);
            DB::table('rooms')->insert([
                'type' => 'Individuales',
                
                'price' => 30,
        ]);

        DB::table('rooms')->insert([
            'type' => 'Dobles',
            
            'price' => 40,
    ]);
    DB::table('rooms')->insert([
        'type' => 'Triples',
        
        'price' => 50,
]);
    
    }
}
