<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

         User::factory(10)->create();

        Event::factory(15)->create();

        Member::factory(10)->create();

    }
}
