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
                'jenisKelamin' => '1',
                'alamat' => 'Jl. Delima No 06, Surabaya',
                'email' => 'aliyyaps08@gmail.com',
                'noTelp' => '0812355667723'
            ],
            [
                'namaPegawai' => 'Iqri Mannisa',
                'jenisKelamin' => '1',
                'alamat' => 'Jl. Jeruk No 14, Sidoarjo',
                'email' => 'iqrimannisa@gmail.com',
                'noTelp' => '0812355667723'
            ],
            [
                'namaPegawai' => 'Sheila Putri',
                'jenisKelamin' => '1',
                'alamat' => 'Jl. Manggis No 53, Surabaya',
                'email' => 'sheilaputri@gmail.com',
                'noTelp' => '089555581403'
            ],
            [
                'namaPegawai' => 'Salsabila Dini',
                'jenisKelamin' => '1',
                'alamat' => 'Jl. Durian No 21, Kediri',
                'email' => 'salsabilad@gmail.com',
                'noTelp' => '085333444555'
            ],
            [
                'namaPegawai' => 'Nathania Zara',
                'jenisKelamin' => '1',
                'alamat' => 'Jl. Raflesia No 83, Malang',
                'email' => 'nathaniazara@gmail.com',
                'noTelp' => '0812323298999'
            ],
            [
                'namaPegawai' => 'Tiara Ayu',
                'jenisKelamin' => '1',
                'alamat' => 'Jl. Jambu No 36 Sidoarjo',
                'email' => 'ayutiara@gmail.com',
                'noTelp' => '085232344222'
            ],
            [
                'namaPegawai' => 'Bima Bayu',
                'jenisKelamin' => '0',
                'alamat' => 'Jl. Srikaya No 20 Sidoarjo',
                'email' => 'bima.bayu@gmail.com',
                'noTelp' => '085753589402'
            ],
            [
                'namaPegawai' => 'Deva Bahtiar',
                'jenisKelamin' => '0',
                'alamat' => 'Jl. Durian No 45, Mojokerto',
                'email' => 'bahtiardev@gmail.com',
                'noTelp' => '081355544577'
            ],
            [
                'namaPegawai' => 'Gita Aulia',
                'jenisKelamin' => '1',
                'alamat' => 'Jl. Semangka No 7, Surabaya',
                'email' => 'gitaulia@gmail.com',
                'noTelp' => '08238344599'
            ],
            [
                'namaPegawai' => 'Mahendra Rauf',
                'jenisKelamin' => '0',
                'alamat' => 'Jl. Mawar No 37, Malang',
                'email' => 'mahendrauf@gmail.com',
                'noTelp' => '0812355667723'
            ],
            [
                'namaPegawai' => 'Aldani Putra',
                'jenisKelamin' => '0',
                'alamat' => 'Jl. Sedap Malam No 13, Mojokerto',
                'email' => 'aldanip@gmail.com',
                'noTelp' => '0819875345678'
            ],
            [
                'namaPegawai' => 'Amalia Zahwa',
                'jenisKelamin' => '1',
                'alamat' => 'Jl. Sakura No 16, Kediri',
                'email' => 'amaliaz@gmail.com',
                'noTelp' => '0812866123406'
            ]
        ];
        DB::table('Pegawais') -> insert($data);
    }
}