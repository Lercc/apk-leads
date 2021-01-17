<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Lead;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'luis',
            'email' => 'l@admin.com',
            'password' => bcrypt('2016101101A')
        ]);
        Lead::factory(150)->create();

    }
}
