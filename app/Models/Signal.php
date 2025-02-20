<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signal extends Model
{
    use HasFactory;

    protected $fillable = [
        'currency_pair',
        'signal_type',
        'entry_point',
        'leverage',
        'take_profits',
        'stop_loss',
        'time_frame',
        'is_vip',
    ];
}