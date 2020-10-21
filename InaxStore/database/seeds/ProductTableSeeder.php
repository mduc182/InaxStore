<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 10;

        for($i= 0; $i<$limit; $i++)
        {
            DB::table('products')->insert([
                'productname'=> Str::random(5),
                'detail' => Str::random(5),
                'price' => Str::random(5),
                'amount' => Str::random(5),
                'detail' => Str::random(5),
                'image' => Str::random(5),
                'type_id' => rand(1,5),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),


            ]);
        }
    }
}
