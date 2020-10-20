<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Film;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // On poplarise la base de données avec 10 enregistrement (lignes)
        Film::factory(10)->create();

    }
}
