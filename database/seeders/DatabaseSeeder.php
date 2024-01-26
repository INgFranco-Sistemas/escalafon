<?php

namespace Database\Seeders;

use App\Models\Estudio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call( OficinaSeeder::class );
        $this->call( EstudioSeeder::class );
    }
}
