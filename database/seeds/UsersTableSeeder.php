<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->truncate();
        DB::table('profiles')->truncate();

        $user = \App\User::create([
            'email' => 'admin@schroders.com',
            'password' => bcrypt('password')
        ]);

        $profile = \App\Profile::create([
            'user_id' => $user->id,
            'first_name' => 'Leonard',
            'last_name' => 'Ogbonna'
        ]);

        \App\Avatar::create([
            'profile_id' => $profile->id,
            'avatar'    => 'default_avatar.png'
        ]);

        $user->assignRole('admin');
    }
}
