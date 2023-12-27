<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['name','number','event_id','ticket_id','booking_date'];

    public function event()
{
    return $this->belongsTo(Event::class);
}

    public function ticket()
{
    return $this->belongsTo(Ticket::class);
}

}
