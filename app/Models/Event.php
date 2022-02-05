<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [
        'created_at',
        'updated_at',
    ];

    public function scopeGetEventByName($query, $array)
    {
        return $query->where('name', $array['name']);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function fights()
    {
        return $this->hasMany(Fight::class);
    }
}
