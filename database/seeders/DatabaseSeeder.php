<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        \App\Models\User::factory(3)->create()->each(function($u){
            // \App\Models\
            $u->questions()
                ->saveMany(
                    // factory(App\Models\Question::class, rand(1, 5))->make()
                    \App\Models\Question::factory(rand(1, 5))->make()
                )->each(function($q){
                    $q->answers()->saveMany(\App\Models\Answer::factory(rand(1,5))->make());
                });
        });
    }
}
