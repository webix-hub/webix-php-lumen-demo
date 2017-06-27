<?php

use Illuminate\Database\Seeder;

class PeoplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peoples')->insert([

    [ 'username' => 'janedoe', 'birthday' => "1980-06-20",
         'name' => "Jane Doe", 'email' => "janedoe@gmail.com", 
         'age' => 37, 'group_id' => 2 ],
    [ 'username' => 'alexb', 'birthday' => "1968-01-11",
         'name' => "Alex Brown", 'email' => "alexb@hotmail.com", 
         'age' => 49, 'group_id' => 1 ],
    [ 'username' => 'bonny', 'birthday' => "2001-02-18",
         'name' => "Bonny Ampa", 'email' => "bonny@gmail.com", 
         'age' => 16, 'group_id' => 2 ]
    
        ]);
    }
}
