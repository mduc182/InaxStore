<?php

use Illuminate\Database\Seeder;

class ProviderTableSeeder extends Seeder
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
            DB::table('providers')->insert([
                'providername'=> Str::random(5),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),


            ]);
        }
    }
}
