<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder {
   public function run(): void {
    $data = [
        [
            'supplier_id'=>1, 
            'supplier_kode'=>'SUP01', 
            'supplier_nama'=>'PT Maju Jaya', 
            'supplier_alamat'=>'Malang',
            'supplier_telp'=>'08123456789' 
        ],
        [
            'supplier_id'=>2, 
            'supplier_kode'=>'SUP02', 
            'supplier_nama'=>'CV Sumber Berkah', 
            'supplier_alamat'=>'Surabaya',
            'supplier_telp'=>'08123456780' 
        ],
        [
            'supplier_id'=>3, 
            'supplier_kode'=>'SUP03', 
            'supplier_nama'=>'Toko Berdikari', 
            'supplier_alamat'=>'Sidoarjo',
            'supplier_telp'=>'08123456781' 
        ],
    ];
    DB::table('m_supplier')->insert($data);
}
}