<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(50)->create();
        $user = User::find(1);
        $user->name = 'dominic';
        $user->email = 'zzp208@gmail.com';
        $user->password = Hash::make('123456');
        $user->is_admin = true;
        $user->save();
    }
}
