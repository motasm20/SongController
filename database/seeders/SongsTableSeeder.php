<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('songs')->insert([
            ['title' => 'Blinding Lights', 'singer' => 'The Weeknd'],
            ['title' => 'Shape of You', 'singer' => 'Ed Sheeran'],
            ['title' => 'Someone You Loved', 'singer' => 'Lewis Capaldi'],
            ['title' => 'Dance Monkey', 'singer' => 'Tones and I'],
            ['title' => 'Someone Like You', 'singer' => 'Adele'],
        ]);
    }
}
