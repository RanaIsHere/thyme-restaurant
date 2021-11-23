<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        DB::table('users')->insert([
            'name' => 'team_origin',
            'email' => 'team_origin@protonmail.com',
            'password' => Hash::make('admin')
        ]);

        DB::table('meals')->insert([
            'meal_name' => 'Mashed Potatoes',
            'meal_price' => 10000,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('meals')->insert([
            'meal_name' => 'Onion Soup',
            'meal_price' => 15000,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('meals')->insert([
            'meal_name' => 'Iced Tea',
            'meal_price' => 5000,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
