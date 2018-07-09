<?php

use Illuminate\Database\Seeder;
use App\Models\Recepcionista;

class RecepcionistaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recepcionista')->insert([
           
            'nombre' => 'Jose',
           
            'dni' => '23112312',
            'correo' => 'aguantaa@gmail.com',
            'telefono' => '98213121'
            ]);
    }
}
