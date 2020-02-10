<?php

use Illuminate\Database\Seeder;

class ApiKelompokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ApiKelompokModel::class, 30)->create();
    }
}
