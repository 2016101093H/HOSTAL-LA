<?php

use Illuminate\Database\Seeder;

class PagosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pagos')->insert([
           
            'tipo_pago' => 'Contado'
            ]);
            DB::table('pagos')->insert([
           
                'tipo_pago' => 'Visa'            
                ]);
    }
}
