<?php

use Illuminate\Database\Seeder;
use App\Product;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::insert([
            [
                'part_number' => '0001',
                'name'=>'test1',
                'description'=>'description1',
                'qty'=>'2',
            ],
            [
                'part_number' => '0002',
                'name'=>'test2',
                'description'=>'description2',
                'qty'=>'5',
            ],
            [
                'part_number' => '0003',
                'name'=>'test3',
                'description'=>'description3',
                'qty'=>'3',
            ],
        ]);
    }
}
