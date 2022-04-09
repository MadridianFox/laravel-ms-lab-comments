<?php

namespace Database\Seeders;

use App\Domain\Comments\Models\Comment;
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
        Comment::factory()
            ->count(10000)
            ->create();
    }
}
