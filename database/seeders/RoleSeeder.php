<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);

        Permission::create(['name' => 'senalamientos.create'])->assignRole($role1);
        Permission::create(['name' => 'senalamientos.edit'])->assignRole($role1);
        Permission::create(['name' => 'sennalamientos.index'])->assignRole($role1);


    }
}
