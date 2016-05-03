<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name' => 'First Article',
            'description' => 'Description of First article',
            'content' => 'Content of First article',
            'active' => true,
        ]);
        
        DB::table('posts')->insert([
            'name' => 'Second Article',
            'description' => 'Description of Second article',
            'content' => 'Content of Second article',
            'active' => false,
        ]);
        
        DB::table('posts')->insert([
            'name' => 'Third Article',
            'description' => 'Description of Third article',
            'content' => 'Content of Third article',
            'active' => true,
        ]);

    }
}
