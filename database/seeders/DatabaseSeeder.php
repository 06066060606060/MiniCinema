<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        for ($i = 1; $i < 8; $i++) {
        DB::table('films')->insert(['name' => 'films ' . $i]);

        }            
 
        DB::table('days')->insert([
            ['name' => 'Lundi' ],
            ['name' => 'Mardi' ],
            ['name' => 'Mercredi' ],
            ['name' => 'Jeudi' ],
            ['name' => 'Vendredi' ],
            ['name' => 'Samedi' ],
            ['name' => 'Dimanche' ],
        ]);
    }
}
