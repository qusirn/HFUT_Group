<?php

use Illuminate\Database\Seeder;

class AudienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Audience::class, 50)->create();
    }
}
