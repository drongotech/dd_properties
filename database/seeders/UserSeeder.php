<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            array(
                [
                    'id'                    => 1,
                    'name'                  => 'Admin User',
                    'email'                 => 'admin@gmail.com',
                    'password'              => '$2y$10$PS/.1dvoje6ytnuzaEIejOijGKa.owJah4j/D3ZOhQFuSbTEyUp1i',
                ],
            )
        );
    }
}
