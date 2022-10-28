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
            "name" => "jordy",
            "lastname" => "segoviano",
            "email" => "jsegoviano_18@alu.uabcs.mx",
            "phone_number" => "612451426"
        ]);

        DB::table('clients')->insert([
            "name" => "pablo",
            "lastname" => "segoviano",
            "email" => "jsegoviano_18@alu.uabcs.mx",
            "phone_number" => "612451426"
        ]);
    }
}
