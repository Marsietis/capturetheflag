<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Creates default admin login
        DB::table('users')->insert([
            'name' => '',
            'email' => '',
            'password' => bcrypt(''),
            'is_admin' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('leaderboard')->insert([
            'user_id' => 1,
            'score' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Creates default tasks
        DB::table('tasks')->insert([
            'title' => 'Welcome to the CTF!',
            'description' => 'Welcome to Capture the flag! The flag format CTF{Flag} helps you to know what to look for as you solve tasks. Good luck! Flag for this task: CTF{W3lc0m3_t0_th3_ctf}.',
            'points' => 10,
            'flag' => 'CTF{W3lc0m3_t0_th3_ctf}',
            'file' => null,
            'link' => null,
            'category' => 'General',
        ]);
    }
}
