<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'product' => 'Moiturizer ',
                'jenis' => 'Skin Care',
                'manfaat' => 'Melembabkan kulit',
                'harga' => 37000,
                'gambar' =>'asset/images/gambar1.png'
            ],
            [
                'product' => 'Serum Somethinc ',
                'jenis' => 'Skin Care',
                'manfaat' => 'senyawa anti-inflamasi, sekaligus memperbaiki tekstur kulit.',
                'harga' => 175000,
                'gambar' =>'asset/images/gambar2.png'
            ],
            [
                'product' => 'Exfoliating Toner',
                'jenis' => 'Skin Care',
                'manfaat' => 'Mengangkat sel kulit mati pada wajah,',
                'harga' => 1500000,
                'gambar' =>'asset/images/gambar3.png'
            ],
            [
                'product' => 'Hydrating Toner',
                'jenis' => 'Skin Care',
                'manfaat' => 'Merawat kulit berjerawat dan memperbaiki tekstur kulit',
                'harga' => 78600,
                'gambar' =>'asset/images/gambar4.png'
            ],
            [
                'product' => 'Essence',
                'jenis' => 'Skin Care',
                'manfaat' => 'Menyeimbangan pH kulit wajah',
                'harga' => 120000,
                'gambar' =>'asset/images/gambar5.png'
            ],
            [
                'product' => 'Facial Wash',
                'jenis' => 'Skin Care',
                'manfaat' => 'Menghilangkan Debu Dan Kotoran',
                'harga' => 67000,
                'gambar' =>'asset/images/gambar6.png'
            ], 
            [
                'product' => 'Micellar Cleansing Water',
                'jenis' => 'Skin Care',
                'manfaat' => 'Mengurangi risiko iritasi kulit',
                'harga' => 35000,
                'gambar' =>'asset/images/gambar7.png'
            ],
            [
                'product' => 'Sheet Mask',
                'jenis' => 'Masker Wajah',
                'manfaat' => 'Mencerahkan wajah',
                'harga' => 10000,
                'gambar' =>'asset/images/gambar8.png'
            ],
            [
                'product' => 'Peel Off Mask',
                'jenis' => 'Masker Wajah',
                'manfaat' => 'Mencegah munculnya komedo hitam',
                'harga' => 1500000,
                'gambar' =>'asset/images/gambar9.png'
            ],
            [
                'product' => 'Clay Mask',
                'jenis' => 'Masker Wajah',
                'manfaat' => 'Membersihkan minyak berlebih',
                'harga' => 27300,
                'gambar' =>'asset/images/gambar10.png'
            ],
            [
                'product' => 'Gel Mask',
                'jenis' => 'Masker Wajah',
                'manfaat' => 'Melembabkan kulit wajah',
                'harga' => 73000,
                'gambar' =>'asset/images/gambar11.png'
            ],
            [
                'product' => 'Primer',
                'jenis' => 'Make Up',
                'manfaat' => 'Menyamarkan pori-pori dan garis halus pada wajah',
                'harga' => 68000,
                'gambar' =>'asset/images/gambar12.png'
            ],
            [
                'product' => 'Foundation',
                'jenis' => 'Make Up',
                'manfaat' => 'Menyamarkan noda & Warna Kulit',
                'harga' => 37900,
                'gambar' =>'asset/images/gambar13.png'
            ],
            [
                'product' => 'Lipstik',
                'jenis' => 'Make Up',
                'manfaat' => 'Menghidrasi bibir dan mewarnai bibir',
                'harga' => 59900,
                'gambar' =>'asset/images/gambar14.png'
            ],
            [
                'product' => 'Concealer',
                'jenis' => 'Make Up',
                'manfaat' => 'Menutupi atau menyamarkan kekurangan di kulit wajah',
                'harga' => 32500,
                'gambar' =>'asset/images/gambar15.png'
            ],
            [
                'product' => 'Eye shadow',
                'jenis' => 'Make Up',
                'manfaat' => 'Untuk menghias kelopak mata ',
                'harga' => 87000,
                'gambar' =>'asset/images/gambar16.png'
            ]
        ]);
    }
}
