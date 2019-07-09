<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Spatie\Permission\Models\Role::create([
            'guard_name'    => 'web',
            'name'          => 'admin'
        ]);

        \Spatie\Permission\Models\Role::create([
            'guard_name'    => 'web',
            'name'          => 'member'
        ]);
    }
}
