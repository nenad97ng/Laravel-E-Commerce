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
             
    DB::table('products')->insert([
     [ 
        "name"=>"Apple Watch Series 7",
        "price"=>"550",
        "description"=>"The larger display enhances the entire experience, making Apple Watch easier to use and read.",
        "category"=>"watch",
        "gallery"=>"https://istyle.rs/media/catalog/product/cache/image/e9c3970ab036de70892d86c6d221abfe/a/p/apple_watch_series_7_gps_41mm_product_red_aluminum_product_red_sport_band_34fr_screen__usen_1_3.jpeg"
     ],
     [ 
        "name"=>"Iphone 11",
        "price"=>"500",
        "description"=>"Liquid Retina HD display
        6.1‑inch (diagonal) all-screen LCD Multi-Touch display with IPS technology",
        "category"=>"mobile",
        "gallery"=>"https://istyle.rs/media/catalog/product/cache/image/e9c3970ab036de70892d86c6d221abfe/a/p/apple_iphone_11_red_1_8.jpg"
     ],
    [ 
        "name"=>"Iphone SE",
        "price"=>"400",
        "description"=>"Apple announced the iPhone SE (second generation) in April 2020 to act as the new budget iPhone. It has 4K video recording capabilities,
         a 7MP selfie camera, wireless charging, and an A13 chipset, and is available in three colors.",
        "category"=>"mobile",
        "gallery"=>"https://istyle.rs/media/catalog/product/cache/image/e9c3970ab036de70892d86c6d221abfe/i/p/iphonese_wwen_image_white_2_8.jpg"
    ],
    [ 
        "name"=>"iPhone 13 Pro Max",
        "price"=>"1500",
        "description"=>"The iPhone 13 Pro Max display has rounded corners that follow a beautiful curved design, and these corners are within a standard rectangle.",
        "category"=>"mobile",
        "gallery"=>"https://istyle.rs/media/catalog/product/cache/image/e9c3970ab036de70892d86c6d221abfe/i/p/iphone_13_pro_max_graphite_pdp_image_position-1a__wwen_4.jpg"
    ]
        ]);
    }
}
