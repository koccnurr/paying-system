<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $createuser = User::create([
            'first_name' => 'Ahmet',
            'last_name' => 'Yılmaz',
            'email' => 'ahmet@email.com',
            'started_at' => '2024-01-01',
            'finished_at' => '2024-01-30',
        ]);
        $createuser = User::create([
            'first_name' => 'Ayşe',
            'last_name' => 'Demir',
            'email' => 'ayse@email.com',
            'started_at' => '2024-01-10',
            'finished_at' => '2024-02-09',
        ]);
        $createuser = User::create([
            'first_name' => 'Mehmet',
            'last_name' => 'Kara',
            'email' => 'mehmet@email.com',
            'started_at' => '2024-01-15',
            'finished_at' => '2024-02-14',
        ]);
       
    }
}