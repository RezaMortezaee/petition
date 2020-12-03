<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Sign::factory(50)->create();
    }
}
