<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['email' => 'admin@example.com'], [
            'name' => 'Demo User',
            'email' => 'admin@example.com',
            'password' => 'admin@example.com',
            'email_verified_at' => Carbon::now(),
        ]);
    }
}