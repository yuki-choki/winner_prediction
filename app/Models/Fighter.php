<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fighter extends Model
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

    public function fights()
    {
        return $this->hasMany(Fight::class);
    }
}
