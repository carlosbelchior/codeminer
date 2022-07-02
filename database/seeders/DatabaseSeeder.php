<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('planets')->insert(['name' => 'Andvari']);
        DB::table('planets')->insert(['name' => 'Demeter']);
        DB::table('planets')->insert(['name' => 'Aqua']);
        DB::table('planets')->insert(['name' => 'Calas']);

        // Default routers
        DB::table('routers')->insert(['origin_id' => 1, 'destiny_id' => 3, 'coust' => 13]);
        DB::table('routers')->insert(['origin_id' => 1, 'destiny_id' => 4, 'coust' => 23]);
        DB::table('routers')->insert(['origin_id' => 2, 'destiny_id' => 3, 'coust' => 22]);
        DB::table('routers')->insert(['origin_id' => 2, 'destiny_id' => 4, 'coust' => 25]);
        DB::table('routers')->insert(['origin_id' => 3, 'destiny_id' => 2, 'coust' => 30]);
        DB::table('routers')->insert(['origin_id' => 3, 'destiny_id' => 4, 'coust' => 12]);
        DB::table('routers')->insert(['origin_id' => 4, 'destiny_id' => 1, 'coust' => 20]);
        DB::table('routers')->insert(['origin_id' => 4, 'destiny_id' => 2, 'coust' => 25]);
        DB::table('routers')->insert(['origin_id' => 4, 'destiny_id' => 3, 'coust' => 15]);
        // Extra routers
        DB::table('routers')->insert(['origin_id' => 1, 'destiny_id' => 2, 'coust' => 48]);
        DB::table('routers')->insert(['origin_id' => 2, 'destiny_id' => 1, 'coust' => 45]);
        DB::table('routers')->insert(['origin_id' => 3, 'destiny_id' => 1, 'coust' => 32]);
    }
}
