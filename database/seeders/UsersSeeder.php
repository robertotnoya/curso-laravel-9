<?php

namespace Database\Seeders;

use App\Models\{
    User
};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => env('APP_USER_NAME'),
            'email' => env('APP_USER_EMAIL'),
            'password' => bcrypt(env('APP_USER_PASSWORD'))
        ]);
    }
}
