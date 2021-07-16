<?php

use Illuminate\Database\Seeder;
use App\User;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'raj',
                'email'=>'raj@yopmail',
                'password'=>bcrypt('123456'),
                'company_name'=>'test',
                'address'=>'26 504 new suda',
                'state'=>'gujarat',
                'zip'=>395004,
            ],
            [
                'name' => 'fenil',
                'email'=>'fenil@yopmail',
                'password'=>bcrypt('123456'),
                'company_name'=>'test',
                'address'=>'27 504 new suda',
                'state'=>'gujarat',
                'zip'=>395004,
            ],
            [
                'name' => 'max',
                'email'=>'max@yopmail',
                'password'=>bcrypt('123456'),
                'company_name'=>'test',
                'address'=>'25 504 new suda',
                'state'=>'gujarat',
                'zip'=>395004,
            ],
        ]);
    }
}
