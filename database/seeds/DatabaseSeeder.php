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
        $this->call([
            StudentsTableSeeder::class,
            TeachersTableSeeder::class,
            LivesTableSeeder::class,
            VideosTableSeeder::class,
            AudiencesTableSeeder::class,
            RecommendsTableSeeder::class,
            WatchHistoriesTableSeeder::class,
        ]);
    }
}
