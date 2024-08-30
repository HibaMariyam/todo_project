<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tod;

class TodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Tod::factory(10)->create();
    }
}
