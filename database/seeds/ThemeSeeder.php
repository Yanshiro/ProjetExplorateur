<?php

use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\panneau_solaire::create, 5)->each()(function ($u){ 
        $u->ventilateurs()->save(factory(App\VentilateurFactory::class)->make());
            $u->chauffages()->save(factory(App\ChauffageFactory::class)->make());
            $u->panneauSolaires()->save(factory(App\PanneauSolaireFactory::class)->make());
            $u->eolinnes()->save(factory(App\EolienneFactory::class)->make());
        
        });
    }
}
