<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;
    protected $table = 'cinemas';
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'title',
        'description',
        'booking_date',
        'duration',
        'genre',
        'available_seats',
        'harga_tiket'
    ];
}
