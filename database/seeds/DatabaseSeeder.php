<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        factory(App\User::class, 10)->create()
            ->each(function (App\User $user) {
                $user->avatars()->saveMany(factory(App\Avatar::class, 10)->make());
                $user->mails()->saveMany(factory(App\Mail::class, 10)->make());
            });
    }
}
