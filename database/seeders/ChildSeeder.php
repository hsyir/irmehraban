<?php

namespace Database\Seeders;

use App\Models\Child;
use Illuminate\Database\Seeder;

class ChildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Child::factory()->count(500)->create();
    }
}
