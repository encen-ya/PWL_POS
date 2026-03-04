<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder {
  public function run(): void {
    $data = [];
    for ($i = 1; $i <= 15; $i++) {
        $data[] = [
            'kategori_id' => rand(1, 5),
            'barang_kode' => 'BRG' . str_pad($i, 3, '0', STR_PAD_LEFT),
            'barang_nama' => 'Barang Ke-' . $i,
            'harga_beli' => 10000 * rand(1, 5),
            'harga_jual' => 12000 * rand(1, 5),
        ];
    }
    DB::table('m_barang')->insert($data);
}
}