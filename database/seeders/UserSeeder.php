<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        DB::table('pgmc_users_tbl')->insert([
            'username' => 'BAGUIO',
            'unit' => 'RLU-BAGUIO',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'BICOL',
            'unit' => 'RLU-BICOL',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'BUTUAN',
            'unit' => 'RLU-BUTUAN',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'CATBALOGAN',
            'unit' => 'RLU-CATBALOGAN',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'CAVITE',
            'unit' => 'RLU-CAVITE',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'CDO',
            'unit' => 'RLU-CDO',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'CEBU',
            'unit' => 'RLU-CEBU',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'COTABATO',
            'unit' => 'RLU-COTABATO',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'DAVAO',
            'unit' => 'RLU-DAVAO',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'ILOILO',
            'unit' => 'RLU-ILOILO',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'ISABELA',
            'unit' => 'RLU-ISABELA',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'LIPA',
            'unit' => 'RLU-LIPA',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'LUCENA',
            'unit' => 'RLU-LUCENA',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'MANAOAG',
            'unit' => 'RLU-MANAOAG',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'NCR',
            'unit' => 'RLU-NCR',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'NUEVAECIJA',
            'unit' => 'RLU-NUEVAECIJA',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'PAGADIAN',
            'unit' => 'RLU-PAGADIAN',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'PALAWAN',
            'unit' => 'PALAWAN',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'TARLAC',
            'unit' => 'RLU-TARLAC',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'ZAMBOANGA',
            'unit' => 'RLU-ZAMBOAGA',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'PG3',
            'unit' => 'PG3',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('pgmc_users_tbl')->insert([
            'username' => 'PPBU',
            'unit' => 'PPBU',
            'password' => Hash::make('12345'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}