<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        Schedule::create([
            'day' => 'Day 1',
            'date' => 'Wednesday',
            'event_name' => 'Pop Night',
            'time' => '5:00 - 7:00 PM',
            'performer' => 'Adele',
            'genre' => 'Pop',
            'background_color' => '#F3DCD4',
        ]);

        Schedule::create([
            'day' => 'Day 1',
            'date' => 'Friday',
            'event_name' => 'Rock & Roll',
            'time' => '7:00 - 11:00 PM',
            'performer' => 'Rihana',
            'genre' => 'Rock',
            'background_color' => '#D9E3DA',
        ]);

        Schedule::create([
            'day' => 'Day 2',
            'date' => 'Thursday',
            'event_name' => 'DJ Night',
            'time' => '6:30 - 9:30 PM',
            'performer' => 'Rihana',
            'genre' => 'DJ',
            'background_color' => '#ECC9C7',
        ]);

        Schedule::create([
            'day' => 'Day 3',
            'date' => 'Friday',
            'event_name' => 'Free Styles',
            'time' => '6:00 - 10:00 PM',
            'performer' => 'Members',
            'genre' => 'Freestyle',
            'background_color' => '#D1CFC0',
        ]);
    }
}
