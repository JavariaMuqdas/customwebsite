<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Oppo Mobile',
                "price" => "20000",
                "description" => "a smartphone with 8gb ram and much more feature",
                "category" => "mobile",
                "gallery" => "https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name' => 'Samsung TV',
                "price" => "10000",
                "description" => "a smart tv with much more feature",
                "category" => "tv",
                "gallery" => "https://tse1.mm.bing.net/th/id/OIP.u10XKPhTk59nswaOskJS0AHaE8?pid=Api&P=0&h=220"
            ],
            [
                'name' => 'LG TV',
                "price" => "15000",
                "description" => "a smart with much more feature",
                "category" => "tv",
                "gallery" => "https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
            ],
            [
                'name' => 'panasonic fridge',
                "price" => "10000",
                "description" => "a fridge with much more feature",
                "category" => "fridge",
                "gallery" => "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU"
            ],

            [
                'name' => 'Sony WH-1000XM5 Headphones',
                'price' => 89999,
                'description' => 'Industry-leading noise-canceling wireless headphones.',
                'category' => 'Headphones',
                'gallery' => 'https://tse1.mm.bing.net/th/id/OIP.6mxvtD4DVM3J2cxc-ypAgAHaHa?pid=Api&P=0&h=220'
            ],
            [
                'name' => 'Xiaomi Smart Air Fryer Pro',
                'price' => 32999,
                'description' => '6.5L smart air fryer with app control and voice assistant.',
                'category' => 'Kitchen',
                'gallery' => 'https://tse4.mm.bing.net/th/id/OIP.Vw5YtAv1i5_Y2XpQFSVHAAHaJs?pid=Api&P=0&h=220'
            ],
            [
                'name' => 'Dell XPS 13 (2025 Model)',
                'price' => 299000,
                'description' => 'Ultra-thin laptop with Intel Evo and OLED display.',
                'category' => 'Laptop',
                'gallery' => 'https://tse4.mm.bing.net/th/id/OIP.VpqDv69Zd5zyixIVGsq06AHaGM?pid=Api&P=0&h=220'
            ],
            [
                'name' => 'Samsung 65" Neo QLED 8K TV',
                'price' => 670000,
                'description' => 'Ultra-HD Smart TV with AI-enhanced upscaling and Quantum HDR.',
                'category' => 'TV',
                'gallery' => 'https://tse3.mm.bing.net/th/id/OIP.gVOys0ZhwAJFsIwo_-n8DwHaF6?pid=Api&P=0&h=220'
            ],
            [
                'name' => 'Apple Watch Series 10',
                'price' => 124999,
                'description' => 'Health-focused smart watch with blood sugar tracking.',
                'category' => 'Smartwatch',
                'gallery' => 'https://tse2.mm.bing.net/th/id/OIF.7mx45tA2JEjQj82VzEZ74A?pid=Api&P=0&h=220'
            ],
            [
                'name' => 'Logitech MX Master 4 Mouse',
                'price' => 19999,
                'description' => 'Ergonomic productivity mouse with multi-device support.',
                'category' => 'Accessories',
                'gallery' => 'https://tse4.mm.bing.net/th/id/OIP.3h6EJLl4Q8GBMEq1Ss-V3QHaFm?pid=Api&P=0&h=220'
            ],
            [
                'name' => 'Anker 20000mAh Power Bank',
                'price' => 7999,
                'description' => 'Fast-charging power bank with USB-C and PD support.',
                'category' => 'Accessories',
                'gallery' => 'https://tse4.mm.bing.net/th/id/OIP.mkblYb__oV2TI5cMZGrlIgHaE8?pid=Api&P=0&h=220'
            ],
            [
                'name' => 'Amazon Echo Dot (5th Gen)',
                'price' => 11999,
                'description' => 'Smart speaker with improved bass and Alexa built-in.',
                'category' => 'Smart Home',
                'gallery' => 'https://m.media-amazon.com/images/G/35/kindle/journeys/Mvq9IW0GZYhQQxsK3yOI2P3mAwEpOFjw7I006Eo32BTY3D/Y2YwZDUxOWQt._CB608570751_.jpg'
            ],
        ]);
    }
}
