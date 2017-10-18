<?php

use Illuminate\Database\Seeder;

class DonacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        $insumos = [
            "Protesis de pierna",
            "Protesis de brazo",
            "Cal Sodada",
            "Filtro antibacteriano",
            "Tubo corrugado 22mm de diametro",
            "Aguja con bisel TOUHI 18G",
            "Cánula orofaringea de plástico",
            "Tubo endotraqueal",
            "Máscara laringea tamaño 4",
            "Sulfato de bario suspensión al 4.6%",
            "Conector en Y (60-100) pulgadas",
            "Almohadilla para clip nasal",
            "Frasco macronebulizador",
            "Máscara para resucitación cardiopulmonar",
            "Pañal grande para niño",
            "Pañal pequeño para niño",
            "Cánula nasal",
            "Sonda para aspirar",
            "Aguja para biopsia (10-30)cm",
            "Aguja de punción lumbar"
        ];
    
        $medicamentos = [
            "Ibritumomab",
            "Rituximag",
            "Tositumomab",
            "Trastuzumab",
            "Abitrexate",
            "Arranon",
            "Besponsa",
            "Clafen",
            "Clofarex",
            "Dasatinib",
            "Folex",
            "Mexate-AQ",
            "Neosar",
            "ADE",
            "Rydapt",
            "Cytarabine",
            "Cytosar-U",
            "Tarabine PFS",
            "Sprycel",
            "Vicristine Sulfato"
        ];

        $tipo = [
            "Medicamento",
            "Insumo"
        ];
        
        for($i=0; $i<20; $i++) {
            DB::table('donaciones')->insert([
                'nombre' => $medicamentos[$i],
                'tipo' => $tipo[0]
            ]);
        }
        for($i=0; $i<20; $i++) {
            DB::table('donaciones')->insert([
                'nombre' => $insumos[$i],
                'tipo' => $tipo[1]
            ]);
        }
    }
}
