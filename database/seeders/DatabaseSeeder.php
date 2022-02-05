<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Knjiga;
use App\Models\KategorijaClana;
use App\Models\Clan;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        KategorijaClana::truncate();
        Clan::truncate();
        Knjiga::truncate();
        
        \App\Models\User::factory(20)->create();
        \App\Models\Knjiga::factory(20)->create();
        \App\Models\KategorijaClana::factory(10)->create();
        \App\Models\Clan::factory(20)->create();

       
    }

    
}
