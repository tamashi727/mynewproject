<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create( [
            'id'=>1,
            'name'=>'tama',
            'email'=>'tama@gmail.com',
            'phone'=>'+880-556745332',
            'address'=>'554 st street',
            'usertype'=>'0',
            'email_verified_at'=>NULL,
            'password'=>'$2y$10$vangEPnQWgJVGOAWa/SqEO24OabRiVgMsi/OWhIwJPh5hSkk3B12G',
            'two_factor_secret'=>NULL,
            'two_factor_recovery_codes'=>NULL,
            'remember_token'=>NULL,
            'current_team_id'=>NULL,
            'profile_photo_path'=>NULL,
            'created_at'=>'2022-01-04 23:16:57',
            'updated_at'=>'2022-01-04 23:16:57'
            ] );
                        
            User::create( [
            'id'=>2,
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'phone'=>'1234',
            'address'=>'443 dumy street',
            'usertype'=>'1',
            'email_verified_at'=>NULL,
            'password'=>'$2y$10$8G02xK0yZpVT2nKv45cGIeTDdOELPYO4B0wIQQOmq6wx0D5sTyy3i',
            'two_factor_secret'=>NULL,
            'two_factor_recovery_codes'=>NULL,
            'remember_token'=>NULL,
            'current_team_id'=>NULL,
            'profile_photo_path'=>NULL,
            'created_at'=>'2022-01-04 23:23:47',
            'updated_at'=>'2022-01-04 23:23:47'
            ] );
    }
}
