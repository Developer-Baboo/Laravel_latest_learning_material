<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $path = database_path('seeders/lecturers.jsonl');
    $lecturers = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lecturers as $lecturers) {
        DB::table('lecturers')->insert(json_decode($lecturers, true));
    }
}
}
