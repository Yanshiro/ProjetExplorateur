<?php

use Illuminate\Database\Seeder;

class SanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            factory(App\Sante::create, 5)->each()(function ($u){ 
            });

    }
}
