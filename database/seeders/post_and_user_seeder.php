<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class post_and_user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Kim Walker',
            'email' =>'kimwalker@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('posts')->insert([
            'title' => '3 Easy Ways To Make Your iPhone Faster',
            'content' =>'The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.

             Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.',
            
            'user_id' => 1,
        ]);
    }
}
