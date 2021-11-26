<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        db::table('productos')->insert([
            [
                'producto'=>'Agua'
                ,'existencias'=>56
                ,'precio_unitario'=>12.5
                ,'fotografia'=>'agua.png'
                ,'descripcion'=>'agua simple '
                ,'estado'=>'activo'
                ,'tasa_iva'=>16
    
            ],
            [
                'producto'=>'coca'
                ,'existencias'=>34
                ,'precio_unitario'=>16.7
                ,'fotografia'=>'coca.png'
                ,'descripcion'=>' simple coca'
                ,'estado'=>'activo'
                ,'tasa_iva'=>16
    
            ]

            ]);
    }
}
