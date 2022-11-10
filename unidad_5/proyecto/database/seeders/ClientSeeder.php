<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'jordy',
            'lastname' => 'segoviano',
            'email' => 'jsegoviano_18@alu.uabcs.mx',
            'phone_number' => '6120123124'
        ]);

        DB::table('clients')->insert([
            'name' => 'Isaac',
            'lastname' => 'Parkour',
            'email' => 'isaco_lokito_moxxito@gmail.com',
            'phone_number' => '6120000000'
        ]);
    }
}
