<?php

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
        for ($i = 1 ; $i <= 10 ; $i++){
            DB::table('product')->insert([
                'name' => "Product $i",
                'price' => $i,
                'description' => "Description $i",
                'id_category' => rand(1,10),
                'img' => "https://kaverisias.com/wp-content/uploads/2018/01/catalog-default-img.gif",

            ]);
        }
    }
}
