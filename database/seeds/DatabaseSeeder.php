<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArticleTableSeeder::class);
    }
}

class ArticleTableSeeder extends Seeder{
    public function run(){
        \App\article::truncate();
        factory(\App\article::class,20)->create();
    }
}
