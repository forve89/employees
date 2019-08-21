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
        factory(App\Models\BasePositions::class, 50)->create();
        factory(App\Models\BaseEmployees::class, 50000)->create();
    }
}
