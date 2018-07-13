<?php

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('cuartos')->insert([
            'type' => 'Standard',
            'price' => 30,
            ]);
        DB::table('cuartos')->insert([
            'type' => 'Mediano',
            'price' => 20,
            ]);
        DB::table('cuartos')->insert([
            'type' => 'Pequeño',
            'price' => 10,
            ]);
        
    }
}
