<?php

use App\User;
use Illuminate\Database\Seeder;

class GeneralSeeding extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 0,
            'company_url' => '',
        ]);
    }
}
