<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
   public function run(): void {
    $data = [];
    $counter = 1;
    for ($i = 1; $i <= 10; $i++) { 
        for ($j = 1; $j <= 3; $j++) { 
            $barang_id = ($j % 2 == 0) ? 1 : 2; 
            $harga = ($barang_id == 1) ? 5000 : 3500;

            $data[] = [
                'detail_id' => $counter++,
                'penjualan_id' => $i, 
                'barang_id' => $barang_id,
                'harga' => $harga,
                'jumlah' => 2,
            ];
        }
    }
    DB::table('t_penjualan_detail')->insert($data);
}
}