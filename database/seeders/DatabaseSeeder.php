<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            'name' => 'Caner ELİBOL',
            'email' => 'elibol97@gmail.com',
            'type'=>'admin',
            'email_verified_at' => now(),
            'password' => '$2y$10$pVqtY8fN5uXv2Sj28l/VOuX7s7.a31Yb79NqJqAYT0GVEDINjn2mC', // password
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory(5)->create();
    }
}
