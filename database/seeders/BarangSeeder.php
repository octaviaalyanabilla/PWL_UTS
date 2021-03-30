<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'id_barang' => '1',
            'kode_barang' => 'PRD001',
            'nama_barang' => 'Indomie',
            'kategori_barang' => 'Makanan',
            'harga' => '3000',
            'qty' => '100'
        ],
        [
            'id_barang' => '2',
            'kode_barang' => 'PRD002',
            'nama_barang' => 'Pocari Sweat',
            'kategori_barang' => 'Minuman',
            'harga' => '6000',
            'qty' => '50'
        ],
        [
            'id_barang' => '3',
            'kode_barang' => 'PRD003',
            'nama_barang' => 'Silverqueen',
            'kategori_barang' => 'Snack',
            'harga' => '12500',
            'qty' => '45'
        ],
       [
            'id_barang' => '4',
            'kode_barang' => 'PRD004',
            'nama_barang' => 'Pita',
            'kategori_barang' => 'Accessories',
            'harga' => '12500',
            'qty' => '30'
        ],
        [
            'id_barang' => '5',
            'kode_barang' => 'PRD005',
            'nama_barang' => 'Samyang',
            'kategori_barang' => 'Makanan',
            'harga' => '17500',
            'qty' => '45'
        ],
        [
            'id_barang' => '6',
            'kode_barang' => 'PRD006',
            'nama_barang' => 'CocaCola',
            'kategori_barang' => 'Minuman',
            'harga' => '6500',
            'qty' => '50'
        ],
        [
            'id_barang' => '7',
            'kode_barang' => 'PRD007',
            'nama_barang' => 'Yupi',
            'kategori_barang' => 'Snack',
            'harga' => '10000',
            'qty' => '45'
        ],
        [
            'id_barang' => '8',
            'kode_barang' => 'PRD008',
            'nama_barang' => 'Bando',
            'kategori_barang' => 'Accessories',
            'harga' => '12500',
            'qty' => '25'
        ],
        [
            'id_barang' => '9',
            'kode_barang' => 'PRD009',
            'nama_barang' => 'ShinRamyeon',
            'kategori_barang' => 'Makanan',
            'harga' => '14500',
            'qty' => '25'
        ],
        [
            'id_barang' => '10',
            'kode_barang' => 'PRD010',
            'nama_barang' => 'Oreo',
            'kategori_barang' => 'Snack',
            'harga' => '6000',
            'qty' => '30'
        ],
        [
            'id_barang' => '11',
            'kode_barang' => 'PRD011',
            'nama_barang' => 'Jedai',
            'kategori_barang' => 'Accessories',
            'harga' => '4000',
            'qty' => '45'
        ],
        [
            'id_barang' => '12',
            'kode_barang' => 'PRD012',
            'nama_barang' => 'Tteokbboki',
            'kategori_barang' => 'Makanan',
            'harga' => '16000',
            'qty' => '15'
        ],
        [
            'id_barang' => '13',
            'kode_barang' => 'PRD013',
            'nama_barang' => 'Cheetos',
            'kategori_barang' => 'Snack',
            'harga' => '6000',
            'qty' => '45'
        ],
        [
            'id_barang' => '14',
            'kode_barang' => 'PRD014',
            'nama_barang' => 'Kalung',
            'kategori_barang' => 'Accessories',
            'harga' => '25000',
            'qty' => '10'
        ],
        [
            'id_barang' => '15',
            'kode_barang' => 'PRD015',
            'nama_barang' => 'PopMie',
            'kategori_barang' => 'Makanan',
            'harga' => '4000',
            'qty' => '45'
        ],
        [
            'id_barang' => '16',
            'kode_barang' => 'PRD016',
            'nama_barang' => 'Sprite',
            'kategori_barang' => 'Minuman',
            'harga' => '5000',
            'qty' => '45'
        ],
        [
            'id_barang' => '17',
            'kode_barang' => 'PRD017',
            'nama_barang' => 'Lays',
            'kategori_barang' => 'Snack',
            'harga' => '7000',
            'qty' => '25'
        ],
        [
            'id_barang' => '18',
            'kode_barang' => 'PRD018',
            'nama_barang' => 'Sticker',
            'kategori_barang' => 'Accessories',
            'harga' => '30000',
            'qty' => '45'
        ],
        [
            'id_barang' => '19',
            'kode_barang' => 'PRD019',
            'nama_barang' => 'MieSedap',
            'kategori_barang' => 'Makanan',
            'harga' => '6000',
            'qty' => '45'
        ],
        [
            'id_barang' => '20',
            'kode_barang' => 'PRD020',
            'nama_barang' => 'Maichi',
            'kategori_barang' => 'Snack',
            'harga' => '17500',
            'qty' => '20'
        ]
    ];
    DB::table('barang')->insert($data);
    }
}
    

