<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;     

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('senalamientos2022')
       ])->assignRole('Admin');

       User::factory(1)->create();

    }

}
