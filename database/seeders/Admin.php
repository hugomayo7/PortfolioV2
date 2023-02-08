<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::whereEmail('hugomayonobe@gmail.com')->exists()) {
            User::create([
                'name' => 'Hugo Mayonobe',
                'email' => 'hugomayonobe@gmail.com',
                'password' => Hash::make('hugosimon2007'),
            ]);
        }
    }
}
