<?php

use Illuminate\Database\Seeder;

class BilldetailTableSeeder extends Seeder
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
            DB::table('billdetails')->insert([
                'users_id' => rand(1,5),
                'provider_id' => rand(1,5),
                'bill_id' => rand(1,5),
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s'),


            ]);
        }
    }
}
