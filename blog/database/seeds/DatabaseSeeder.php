<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\Auther;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // UsersTableSeeder::class,
            PostSeeder::class,
            CategorySeeder::class,
            AutherSeeder::class,
        ]);
    }
}
