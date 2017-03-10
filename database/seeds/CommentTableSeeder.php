<?php 

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CommentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('comments')->delete();
    
        DB::table('comments')->insert(
            array(
                array(
                    'author' => 'Chris Sevilleja',
                    'text' => 'Look I am a test comment.'
                ),
                array(
                    'author' => 'Nick Cerminara',
                    'text' => 'This is going to be super crazy.'
                ),
                array(
                    'author' => 'Holly Lloyd',
                    'text' => 'I am a master of Laravel and Angular.'
                )
            )
        );
    }    

}