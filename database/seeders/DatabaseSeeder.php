<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
//        User::create([
//            'name' => 'Mukidi Laksono',
//            'email' => 'mukidi@gmail.com',
//            'password' => bcrypt('Secret123!'),
//            'avatar' => 'avatar/default.png'
//        ]);
//        User::create([
//           'name' => 'Yossep',
//           'email' => 'yosep@gmail.com',
//            'password' => bcrypt('Secret123!'),
//            'avatar' => 'avatar/default.png'
//        ]);
        User::create([
            'name' => 'Jason Todd',
            'email' => 'jasontodd@gmail.com',
            'password' => bcrypt('Secret123!'),
            'avatar' => 'avatar/default.png',
            'role' => 0,
        ]);
    }
}
