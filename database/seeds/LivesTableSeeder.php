<?php

use Illuminate\Database\Seeder;

class LiveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Live::class, 10)->create();
    }
}
