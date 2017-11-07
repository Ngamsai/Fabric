<?php

use Illuminate\Database\Seeder;

class OrderofcustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orderofcustomers')->insert([
            'OrderID' => '00001',
            'customerID' => '624'
        ]);

        DB::table('orderofcustomers')->insert([
            'OrderID' => '00002',
            'customerID' => '789'
        ]);
        
        DB::table('orderofcustomers')->insert([
            'OrderID' => '00003',
            'customerID' => '101'
        ]);
    }
}
