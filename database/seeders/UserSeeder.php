<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pgmc_text_main_tbl')->insert([
            'afpsn' => '8383',
            'last_name' => 'MACARAEG',
            'first_name' => 'ENRIQUE',
            'middle_name' => 'G',
            'pension_rank' => 'MAJ',
            'status' => '1'
        ]);

        DB::table('pgmc_text_main_tbl')->insert([
            'afpsn' => '255',
            'last_name' => 'VICTORIOSO',
            'first_name' => 'MARCIAL',
            'middle_name' => 'PATRICIO',
            'pension_rank' => '1LT',
            'status' => '1'
        ]);

        DB::table('pgmc_text_main_tbl')->insert([
            'afpsn' => '289',
            'last_name' => 'PANGANORON',
            'first_name' => 'ARTURO',
            'middle_name' => 'SABIO',
            'pension_rank' => '1LT',
            'status' => '1'
        ]);

        DB::table('pgmc_text_main_tbl')->insert([
            'afpsn' => '328',
            'last_name' => 'MAGANDA',
            'first_name' => 'RAYMUNDO',
            'middle_name' => 'T',
            'pension_rank' => 'TSG',
            'status' => '1'
        ]);

        DB::table('pgmc_text_main_tbl')->insert([
            'afpsn' => '338',
            'last_name' => 'SALICSIC',
            'first_name' => 'CONRADO',
            'middle_name' => 'YERRO',
            'pension_rank' => '2LT',
            'status' => '1'
        ]);

        DB::table('pgmc_text_main_tbl')->insert([
            'afpsn' => '381',
            'last_name' => 'SEGUN',
            'first_name' => 'ZOSIMO',
            'middle_name' => 'PADILLA',
            'pension_rank' => '2LT',
            'status' => '1'
        ]);
    }
}