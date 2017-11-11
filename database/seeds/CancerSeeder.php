<?php

use Illuminate\Database\Seeder;

class CancerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $tipo_cancer = [
            'Leucemia',
            'Tumor Sistema Nervioso Central',
            'Tumor óseo',
            'Linfoma',
            'Rabdomiosarcoma',
            'Tumor de Wilms',
            'Retinoblastoma'
        ];

        $i = 0;

        for($i=0; $i<count($tipo_cancer); $i++) {
            DB::table('cancers')->insert([
                'nombre' => $tipo_cancer[$i]
            ]);
        }
    }
}
