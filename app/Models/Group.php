<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $guarded = [
        'created_at',
        'updated_at',
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function scopeGetGroupByName($query, $array)
    {
        return $query->where('name', $array['name']);
    }

}
