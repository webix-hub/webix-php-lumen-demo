<?php

use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documents')->insert([
            [ 'userId' => 1, 'name' => 'resume.doc' ],
            [ 'userId' => 1, 'name' => 'July_2015.doc' ],
            [ 'userId' => 3, 'name' => 'pic001548.jpg' ],
            [ 'userId' => 3, 'name' => 'pic001549.jpg' ],
            [ 'userId' => 3, 'name' => 'pic001550.jpg' ],
            [ 'userId' => 3, 'name' => 'pic001551.jpg' ]
        ]);


        for ($i=1000; $i<2000; $i++){
            DB::table('documents')->insert([
                [ 'userId' => 2, 'name' => "photo".$i.".jpg" ]
            ]);
        }

    }
}
