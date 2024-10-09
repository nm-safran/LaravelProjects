<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if the admin user already exists
$user = \App\Models\User::where('email', 'Admin1@gmail.com')->first();
if ($user) {
    $user->password = bcrypt('22744303');
    $user->save();
} else {
    \App\Models\User::factory()->create([
        'name' => 'Saf',
        'email' => 'Admin1@gmail.com',
        'is_admin' => true,
        'password' => bcrypt('22744303'),
    ]);
}

    }
}
