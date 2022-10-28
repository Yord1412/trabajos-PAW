<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->name = 'jordys';
        //$user->lastname = 'segovianos';
        $user->email = 'jsegovianoa';
        $user->password = 'passa';

        $user->save();

        $user = new User();

        $user->name = 'manuel';
        //$user->lastname = 'mier';
        $user->email = 'jsegob';
        $user->password = 'passo';

        $user->save();
    }
}
