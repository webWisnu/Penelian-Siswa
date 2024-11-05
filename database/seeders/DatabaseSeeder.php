<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        schema::enableForeignKeyConstraints();

        Schema::disableForeignKeyConstraints();


        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'role' =>  "admin",
                'password' => Hash::make('Admin123'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];


        foreach ($users as $user) {
            User::create($user);
        }
    }
}
