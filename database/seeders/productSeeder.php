<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'productName' => 'LG',
                'productPrice' => 20000,
                'productCategory' => "electronics",
                'productDescription' => "electronics hdf sodosd vvoisd v",
                'productGallery' => "https://sajhakinmel.com/public/uploads/all/owqqSxmBPSHpPOZdBPrAzBxAk7zOgU1MU7sOHd0S.jpg",
            ],
            [
                'productName' => 'Fan',
                'productPrice' => 3000,
                'productCategory' => "electronics",
                'productDescription' => "electron fan hdf sodosd vvoisd v",
                'productGallery' => "https://3.imimg.com/data3/KT/HY/MY-7799592/table-fan-500x500.jpg",
            ]
        ]);
    }
}
