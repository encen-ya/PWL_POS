<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder {
   public function run(): void {
    $data = [
        ['kategori_kode' => 'CPN', 'kategori_nama' => 'Coupon'],
        ['kategori_kode' => 'FNB', 'kategori_nama' => 'Food & Beverage'],
        ['kategori_kode' => 'MCH', 'kategori_nama' => 'Merchandise'],
        ['kategori_kode' => 'HNG', 'kategori_nama' => 'Health & Gaming'],       
        ['kategori_kode' => 'HME', 'kategori_nama' => 'Home & Living'],   
    ];
    DB::table('m_kategori')->insert($data);
}
}