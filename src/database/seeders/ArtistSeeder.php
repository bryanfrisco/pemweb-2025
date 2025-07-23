<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    public function run(): void
    {
        Artist::create([
            'name' => 'Rihana',
            'birthdate' => '1988-02-20',
            'music' => 'Pop',
            'youtube' => 'https://youtube.com/rihana',
            'image' => '{{asset ('artists/rihana.jpg')}}',
        ]);
    }
}

