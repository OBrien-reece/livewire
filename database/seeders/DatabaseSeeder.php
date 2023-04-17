<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
           DirectorSeeder::class
        ]);

        Movie::factory(6)->create();
        Movie::factory(4)->create();
        Movie::factory(5)->create();
    }
}
