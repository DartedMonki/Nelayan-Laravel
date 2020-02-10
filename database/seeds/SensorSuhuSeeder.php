<?php

use Illuminate\Database\Seeder;

class SensorSuhuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SensorSuhuModel::class, 30)->create();
    }
}
