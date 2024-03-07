<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AdressBook;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'admin@mail.ru',
            'city' => 'moscow',
            'password' => '123321qqq',
            'adress' => 'Lenina 5',
            'PersonalNumber' => '666666',
            'WorkNumber' => '666666'
        ]);
    }
}
