<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketPlan extends Model
{
    protected $fillable = [
        'title',
        'price',
        'tagline',
        'description',
        'features',
        'button_text',
        'button_link',
    ];

    protected $casts = [
        'features' => 'array',
    ];
}
