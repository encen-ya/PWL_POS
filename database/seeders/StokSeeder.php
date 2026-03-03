<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder {
   public function run(): void {
    $data = [
        ['stok_id' => 1, 'barang_id' => 1, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 100],
        ['stok_id' => 2, 'barang_id' => 2, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 100],
    ];
    DB::table('t_stok')->insert($data);
}
}