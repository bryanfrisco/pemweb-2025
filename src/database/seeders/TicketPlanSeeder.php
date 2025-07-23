<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TicketPlan;

class TicketPlanSeeder extends Seeder
{
    public function run(): void
    {
        TicketPlan::create([
            'title' => 'Early Bird',
            'price' => 120,
            'tagline' => 'Save up to 50%',
            'description' => 'Including good things:',
            'features' => [
                ['value' => 'platform for potential customers'],
                ['value' => 'digital experience'],
                ['value' => 'high-quality sound'],
                ['value' => 'standard content'],
            ],
            'button_text' => 'Buy Ticket',
            'button_link' => 'ticket.html',
        ]);

        TicketPlan::create([
            'title' => 'Standard',
            'price' => 240,
            'tagline' => null,
            'description' => 'What makes a premium festava?',
            'features' => [
                ['value' => 'platform for potential customers'],
                ['value' => 'digital experience'],
                ['value' => 'high-quality sound'],
                ['value' => 'premium content'],
                ['value' => 'live chat support'],
            ],
            'button_text' => 'Buy Ticket',
            'button_link' => 'ticket.html',
        ]);
    }
}
