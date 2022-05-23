<?php

namespace Database\Seeders;

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
        ini_set('memory_limit', '-1');
        // \DB::unprepared(file_get_contents(__dir__ . '/source/codigos1.sql'));
        // \DB::unprepared(file_get_contents(__dir__ . '/source/codigos2.sql'));
        \DB::unprepared(file_get_contents(__dir__ . '/source/db_postgresql.sql'));
    }
}
