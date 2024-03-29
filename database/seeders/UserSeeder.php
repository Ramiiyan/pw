<?php

namespace Database\Seeders;

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
        User::create([
           'name'=> 'Tharinda',
           'comments'=> 'my comment'
        ]);

        User::create([
            'name'=> 'John Doe',
            'comments'=> 'John\'s comment'
        ]);
    }
}
