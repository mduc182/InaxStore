<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        $this->call(UserTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProviderTableSeeder::class);
        $this->call(TypeTableSeeder::class);
        $this->call(BillTableSeeder::class);
        $this->call(BilldetailTableSeeder::class);




    }
}
