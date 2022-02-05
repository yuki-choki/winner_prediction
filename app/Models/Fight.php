<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{
    use HasFactory;

    protected $guarded = [
        'created_at',
        'updated_at',
    ];

    public function predicts()
    {
        return $this->hasMany(Predict::class);
    }

    public function fighter()
    {
        return $this->belongsTo(Fighter::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
