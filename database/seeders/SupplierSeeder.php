<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'namaSupplier' => 'Nurhayati Subakat',
                'produk' => 'Toner, Clay Mask, Primer, Foundation, Concealer, Eye shadow'
            ],
            [
                'namaSupplier' => 'Irene Ursula',
                'produk' => 'Moiturizer, Serum'
            ],
            [
                'namaSupplier' => 'Garnier',
                'produk' => 'Micellar Cleansing Water'
            ],
            [
                'namaSupplier' => 'Maybelline',
                'produk' => 'Lipstik'
            ],
            [
                'namaSupplier' => 'IBu Lee Ji Eun',
                'produk' => 'Toner'
            ],
            [
                'namaSupplier' => 'Hyungmin Kim',
                'produk' => 'Toner'
            ],
            [
                'namaSupplier' => 'Yukan Liao',
                'produk' => 'Essence'
            ],
            [
                'namaSupplier' => 'Galderma',
                'produk' => 'Facial Wash'
            ],
            [
                'namaSupplier' => 'Prastore',
                'produk' => 'Peel Off Mask'
            ],
            [
                'namaSupplier' => 'Axis-Y',
                'produk' => 'Gel Mask'
            ]
        ];
        DB::table('Suppliers') -> insert($data);
    }
}
