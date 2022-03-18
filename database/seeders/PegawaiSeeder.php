<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
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
                'namaPegawai' => 'Aliyya Putri',
                'jenisKelamin' => 'Perempuan',
                'alamat' => 'Jl. Delima No 06, Surabaya',
                'noTelp' => '0812355667723'
            ],
            [
                'namaPegawai' => 'Iqri Mannisa',
                'jenisKelamin' => 'Perempuan',
                'alamat' => 'Jl. Jeruk No 14, Sidoarjo',
                'noTelp' => '0812355667723'
            ],
            [
                'namaPegawai' => 'Sheila Putri',
                'jenisKelamin' => 'Perempuan',
                'alamat' => 'Jl. Manggis No 53, Surabaya',
                'noTelp' => '089555581403'
            ],
            [
                'namaPegawai' => 'Salsabila Dini',
                'jenisKelamin' => 'Perempuan',
                'alamat' => 'Jl. Durian No 21, Kediri',
                'noTelp' => '085333444555'
            ],
            [
                'namaPegawai' => 'Nathania Zara',
                'jenisKelamin' => 'Perempuan',
                'alamat' => 'Jl. Raflesia No 83, Malang',
                'noTelp' => '0812323298999'
            ],
            [
                'namaPegawai' => 'Tiara Ayu',
                'jenisKelamin' => 'Perempuan',
                'alamat' => 'Jl. Jambu No 36 Sidoarjo',
                'noTelp' => '085232344222'
            ],
            [
                'namaPegawai' => 'Bima Bayu',
                'jenisKelamin' => 'Laki-laki',
                'alamat' => 'Jl. Srikaya No 20 Sidoarjo',
                'noTelp' => '085753589402'
            ],
            [
                'namaPegawai' => 'Deva Bahtiar',
                'jenisKelamin' => 'Laki-laki',
                'alamat' => 'Jl. Durian No 45, Mojokerto',
                'noTelp' => '081355544577'
            ],
            [
                'namaPegawai' => 'Gita Aulia',
                'jenisKelamin' => 'Perempuan',
                'alamat' => 'Jl. Semangka No 7, Surabaya',
                'noTelp' => '08238344599'
            ],
            [
                'namaPegawai' => 'Mahendra Rauf',
                'jenisKelamin' => 'Laki-laki',
                'alamat' => 'Jl. Mawar No 37, Malang',
                'noTelp' => '0812355667723'
            ],
            [
                'namaPegawai' => 'Aldani Putra',
                'jenisKelamin' => 'Laki-laki',
                'alamat' => 'Jl. Sedap Malam No 13, Mojokerto',
                'noTelp' => '0819875345678'
            ],
            [
                'namaPegawai' => 'Amalia Zahwa',
                'jenisKelamin' => 'Perempuan',
                'alamat' => 'Jl. Sakura No 16, Kediri',
                'noTelp' => '0812866123406'
            ]
        ];
        DB::table('Pegawais') -> insert($data);
    }
}
