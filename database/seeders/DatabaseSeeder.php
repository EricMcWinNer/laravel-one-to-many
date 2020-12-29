<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => "Laptops",
            ],
            [
                'name' => "Phones"
            ],
            [
                'name' => "Game Consoles"
            ],
            [
                'name' => "Televisions"
            ],
        ]);
        DB::table('products')->insert([
            [
                'name' => "Acer Aspire 5",
                'category_id' => 1,
                'image' => 'aceraspire5.jpg'
            ],
            [
                'name' => "Lenovo IdeaPad 3 ",
                'category_id' => 1,
                'image' => 'lenovoidea3.jpg'
            ],
            [
                'name' => "Acer Predator Helios 300 Gaming Laptop",
                'category_id' => 1,
                'image' => 'acerpradatorhelios3000.jpg'
            ],
            [
                'name' => 'Asus TUF Gaming A15 Laptop',
                'category_id' => 2,
                'image' => 'asustufgaminglaptop.jpg'
            ],
            [
                'name' => 'Nokia 7.2, 6.3-Inch LCD',
                'category_id' => 2,
                'image' => 'nokia7.2.jpg'
            ],
            [
                'name' => 'Oppo A93 Dual SIM',
                'category_id' => 2,
                'image' => 'oppoa93.jpg'
            ],
            [
                'name' => 'LG Stylo 6 Unlocked Smartphone',
                'category_id' => 2,
                'image' => 'lgstylo8.jpg'
            ],
            [
                'name' => 'Dual Sense Wireless Controller',
                'category_id' => 3,
                'image' => 'dualsensewirelesscontroller.jpg'
            ],
            [
                'name' => 'Nintendo Switch',
                'category_id' => 3,
                'image' => 'nintendoswitch.jpg'
            ],
            [
                'name' => 'Infinix 43" Smart LED TV',
                'category_id' => 4,
                'image' => 'infinixtv.jpg'
            ],
            [
                'name' => 'Samsung 55" Flat Smart 4K UHD TV + Netflix & Youtube APP',
                'category_id' => 4,
                'image' => 'samsungtv.jpg'
            ]
        ]);
    }
}
