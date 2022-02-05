<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Predict extends Model
{
    use HasFactory;

    protected $guarded = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function fight()
    {
        return $this->belongsTo(Fight::class);
    }
    
    public function fighter()
    {
        return $this->belongsTo(Fighter::class);
    }
}
