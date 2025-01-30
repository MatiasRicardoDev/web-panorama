<?php

namespace Database\Seeders;

use App\Models\OficinaArroyo;
use App\Models\OficinaBahiaBlanca;
use App\Models\OficinaBuenosAires;
use App\Models\OficinaSanLorenzo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeding San Lorenzo
        OficinaSanLorenzo::create([
            'id' => 1
            ]);
        // Seeding Arroyo
        OficinaArroyo::create([
            'id' => 1
            ]);
        // Seeding Buenos Aires
        OficinaBuenosAires::create([
            'id' => 1
            ]);
        // Seeding Bahia Blanca
        OficinaBahiaBlanca::create([
            'id' => 1
            ]);
    }
}
