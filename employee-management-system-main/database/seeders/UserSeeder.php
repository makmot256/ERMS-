<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        $users = [
            [ 'role_id' => 1, 'name' => 'Atugonza Benjamin', 'email' => 'benjamina993@gmail.com', 'phone' => '+256 702477406', 'status' => 1, 'password' => Hash::make('admin') ],
           
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
