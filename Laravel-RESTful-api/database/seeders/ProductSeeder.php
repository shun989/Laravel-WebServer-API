<?php

namespace Database\Seeders;

use App\Models\Product;
use Dotenv\Util\Str;
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
        $dataArray = [];
        for ($i = 0; $i < 20; $i++) {
            array_push($dataArray, [
                'title' => Str::random(10),
                'price' => random_int(10 , 9999),
                'description' => Str::random(10),
                'category' => Str::random(10),
                'image' => Str::random(10),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        DB::table('products')->insert($dataArray);

//        $product = new Product();
//
//        $product->id = 1;
//        $product->title = "Fjallraven - Foldsack No. 1 Backpack, Fits 15 Laptops";
//        $product->price = 109.95;
//        $product->description = "Your perfect pack for everyday use and walks in the forest. Stash your laptop (up to 15 inches) in the padded sleeve, your everyday";
//        $product->category = "men's clothing";
//        $product->image = "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg";
//        $product->save();
    }
}
