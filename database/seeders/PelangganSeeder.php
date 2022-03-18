<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('pelanggans')->insert([
            [
                'nama' => 'Ahmad Yasir ',
                'jenis_kelamin' => 'Laki-laki',
                'telepon'=> '081212515427',
                'alamat' => 'Jl. Semangka, No. 17A',
                'email' => 'ahmadyasir@gmail.com',
                'kategori_member' =>'Basic'
            ],
            [
                'nama' => 'Najla Gunawan ',
                'jenis_kelamin' => 'Perempuan',
                'telepon'=> '0852782468112',
                'alamat' => 'Jl. Jambu Monyet, No.18',
                'email' => 'najlagungun@gmail.com',
                'kategori_member' =>'Platinum'
            ],
            [
                'nama' => 'Ayu Larasati ',
                'jenis_kelamin' => 'Perempuan',
                'telepon'=> '089321678221',
                'alamat' => 'Jl. Salak, No.23',
                'email' => 'ayularasati@gmail.com',
                'kategori_member' =>'Basic'
            ],
            [
                'nama' => 'Boa Halimah ',
                'jenis_kelamin' => 'Perempuan',
                'telepon'=> '0846221437890',
                'alamat' => 'Jl. Mangga Dua, No.30A',
                'email' => 'bobohalimah@gmail.com',
                'kategori_member' =>'Gold'
            ],
            [
                'nama' => 'Cantika Kirana ',
                'jenis_kelamin' => 'Perempuan',
                'telepon'=> '082516738490',
                'alamat' => 'Jl. Semanggi, No.14',
                'email' => 'cantikaakirana@gmail.com',
                'kategori_member' =>'Silver'
            ],
            [
                'nama' => 'Dinda Puspita Dewi ',
                'jenis_kelamin' => 'Perempuan',
                'telepon'=> '0856134216143',
                'alamat' => 'Jl. Semangka, No.10B',
                'email' => 'dindakiranaaa@gmail.com',
                'kategori_member' =>'Silver'
            ],
            [
                'nama' => 'Faradilla Yoshi ',
                'jenis_kelamin' => 'Perempuan',
                'telepon'=> '08152673894',
                'alamat' => 'Jl. Melati, No.11A',
                'email' => 'faradillayoshi12@gmail.com',
                'kategori_member' =>'Silver'
            ],
            [
                'nama' => 'Wanda salsabila ',
                'jenis_kelamin' => 'perempuan',
                'telepon'=> '0856789321456',
                'alamat' => 'Jl. Apa Adanya, No. 01',
                'email' => 'wandasalsabilaa@gmail.com',
                'kategori_member' =>'Basic'
            ],
            [
                'nama' => 'Joana Subangio ',
                'jenis_kelamin' => 'Laki-laki',
                'telepon'=> '088833321567932',
                'alamat' => 'Jl. Kembang Turi, No.09',
                'email' => 'jojoanasubagio22@gmail.com',
                'kategori_member' =>'Gold'
            ],
            [
                'nama' => 'Komo Ricky ',
                'jenis_kelamin' => 'Laki-laki',
                'telepon'=> '0845678932152',
                'alamat' => 'Jl. Lavender Barat, No.27A',
                'email' => 'jojoanasubagio22@gmail.com',
                'kategori_member' =>'Gold'
            ],
            [
                'nama' => 'Pandu Wicaksono ',
                'jenis_kelamin' => 'Laki-laki',
                'telepon'=> '08121436228292',
                'alamat' => 'Jl. Lavender Barat, No.29A',
                'email' => 'siepanduwicaksono@gmail.com',
                'kategori_member' =>'Gold'
            ],
            [
                'nama' => 'Novia sarasvati ',
                'jenis_kelamin' => 'perempuan',
                'telepon'=> '0825638176354',
                'alamat' => 'Jl. Mangga Timur, No.16',
                'email' => 'viasarah321@gmail.com',
                'kategori_member' =>'Gold'
            ],
            [
                'nama' => 'Jasmine Gloria ',
                'jenis_kelamin' => 'Perempuan',
                'telepon'=> '0893215321611',
                'alamat' => 'Jl. Mannga Dua, No.18',
                'email' => 'jasminegloria@gmail.com',
                'kategori_member' =>'Gold'
            ],
            [
                'nama' => 'Yorica sahara ',
                'jenis_kelamin' => 'Perempuan',
                'telepon'=> '087723214342',
                'alamat' => 'Jl. Lavender Barat, No.15B',
                'email' => 'yoricasahara@gmail.com',
                'kategori_member' =>'Platinum'
            ],
            [
                'nama' => 'Michella Sania Putri ',
                'jenis_kelamin' => 'Perempuan',
                'telepon'=> '085218343298',
                'alamat' => 'Jl. Flamboyan, No.155',
                'email' => 'Michellaputriii@gmail.com',
                'kategori_member' =>'Platinum'
            ],
            [
                'nama' => 'Moana Ayu Dewi ',
                'jenis_kelamin' => 'Perempuan',
                'telepon'=> '0852172615321',
                'alamat' => 'Jl. Kumbang Liar, No.99',
                'email' => 'moanaayu1234@gmail.com',
                'kategori_member' =>'Platinum'
            ],
            [
                'nama' => 'Safira Mailani ',
                'jenis_kelamin' => 'Perempuan',
                'telepon'=> '085321645729',
                'alamat' => 'Jl. Salak, No.86',
                'email' => 'safiramailani@gmail.com',
                'kategori_member' =>'Platinum'
            ],
            [
                'nama' => 'Kinan zakiya ',
                'jenis_kelamin' => 'Perempuan',
                'telepon'=> '08880044403',
                'alamat' => 'Jl. Lavender Barat, No.10B',
                'email' => 'kienanzakiya@gmail.com',
                'kategori_member' =>'Platinum'
            ],
            [
                'nama' => 'Rosiana Rosmalinda ',
                'jenis_kelamin' => 'Perempuan',
                'telepon'=> '081123635188',
                'alamat' => 'Jl. Sariayu, No.21',
                'email' => 'rosianarosmalinda@gmail.com',
                'kategori_member' =>'Platinum'
            ],
            [
                'nama' => 'Rizaldi Munir ',
                'jenis_kelamin' => 'Laki-laki',
                'telepon'=> '0853691778134',
                'alamat' => 'Jl. Semeru Lagi Vulkanik, No.112',
                'email' => 'munirrizaldii@gmail.com',
                'kategori_member' =>'Gold'
            ],
        ]);
    }
}
