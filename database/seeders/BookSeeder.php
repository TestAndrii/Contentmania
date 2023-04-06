<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'name' => Str::random(10),
            'author' => Str::random(10),
            'isbn' => Str::random(10),
            'genre' => Str::random(10),
            'other' => Str::random(10),
            'timestamps' => now(),
        ]);
    }
}
