<?php

use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacto = [
            'Dirección',
            'Teléfono',
            'Estado',
            'Parroquia',
        ];

        $i = 0;

        for($i=0; $i<count($contacto); $i++) {
            DB::table('contactos')->insert([
                'nombre' => $contacto[$i]
            ]);
        }
    }
}
