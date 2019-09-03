<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 10)->create();
        $mbooks = factory(App\Ministrybook::class, 12)->create();
        $author = factory(App\Christianauthor::class, 15)->create();
        }
}

