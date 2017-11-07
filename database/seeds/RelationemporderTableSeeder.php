<?php

use Illuminate\Database\Seeder;

class RelationemporderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emporder')->insert([
            'employeeID' => '1234567891',
            'OrderID' => '00001'
        ]);
        DB::table('emporder')->insert([
            'employeeID' => '1234567892',
            'OrderID' => '00002'
        ]);
        DB::table('emporder')->insert([
            'employeeID' => '1234567893',
            'OrderID' => '00003'
        ]);


    }

}