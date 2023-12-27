<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['event_name','from_venue','to_venue','journey_date'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
    
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    

}
