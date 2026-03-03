<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder {
   public function run(): void {
    $data = [
        ['barang_id'=>1, 'kategori_id'=>1, 'barang_kode'=>'B01', 'barang_nama'=>'Snack', 'harga_beli'=>4000, 'harga_jual'=>5000],
        ['barang_id'=>2, 'kategori_id'=>2, 'barang_kode'=>'B03', 'barang_nama'=>'Aqua', 'harga_beli'=>2500, 'harga_jual'=>3500],
    ];
    DB::table('m_barang')->insert($data);
}
}