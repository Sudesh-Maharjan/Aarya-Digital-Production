<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'title', 'description', 'day', 'month'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($event) {
            $event->month = now()->format('M'); 
            $event->day = now()->format('d');   
        });
    }
}
