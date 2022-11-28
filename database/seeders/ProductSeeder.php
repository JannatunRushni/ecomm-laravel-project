<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
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
            'name' => 'Oppo mobile',
            'price' => '300',
            'description' => 'A smartphone with 8gb ram and much more',
            'category' => 'mobile',
            'gallery' => 'https://opsg-img-cdn-gl.heytapimg.com/epb/202205/25/cAbXEzPky2G4CQGD.png'

        ],

        [
            'name' => 'Panasonic Tv',
            'price' => '400',
            'description' => 'A smart tv with much more',
            'category' => 'tv',
            'gallery' => 'https://www.lydogbillede.dk/wp-content/uploads/2013/08/panasonic-viera-wt60.jpg'

        ],

        [
            'name' => 'Sony Tv',
            'price' => '500',
            'description' => 'A smart tv with much more',
            'category' => 'tv',
            'gallery' => 'https://www.bdstall.com/asset/product-image/giant_125394.jpg'

        ],

        [
            'name' => 'LG refrigerator',
            'price' => '600',
            'description' => 'A refrigerator with much more',
            'category' => 'refrigerator',
            'gallery' => 'http://www.mrelectronicsbd.com/wp-content/uploads/2017/07/lg-refrigerator-gr-p209gsyv.jpg'

        ]

    ]);
    }
}
