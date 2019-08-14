<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Scuti Admin',
            'email' => 'admin@scuti.asia',
            'password' => bcrypt('password')
        ]);
    }
}
