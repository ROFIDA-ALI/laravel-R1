<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 use App\Models\User;
 use App\Models\Car;
 use App\Models\Place;
 use App\Models\Category;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Category::factory(10)->create();

       User::factory(10)->create();
       Car::factory(10)->create();
       Place::factory(100)->create();
    }
    
}









