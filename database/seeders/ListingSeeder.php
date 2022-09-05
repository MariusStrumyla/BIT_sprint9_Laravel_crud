<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listings')->insert([
            'user_id' => 1,
            'title' => 'Laravel',
            'description' => 'Ability to rate a listing',
            'tags' => 'laravel, php',
            'company' => 'Skyto',
            'location' => 'Lithuania',
            'email' => 'skyto@mail.com',
            'website' => 'skyto.lt'
        ]);
    }
}
