<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_number',
        'room_description',
        'floor_id',
        'category_id',
    ];
    protected $table = 'rooms';

    public function floor()
    {
        return $this->belongsTo(Floor::class, 'floor_id');
    }

    public function category()
    {
        return $this->belongsTo(RoomCategory::class, 'category_id');
    }
}
