<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function scopeGroupByFightAndFighter($query, $fightIds)
    {
        return $query
            ->select(DB::raw('count(*) as count, fight_id, win_fighter_id'))
            ->whereIn('fight_id', $fightIds)
            ->groupByRaw('fight_id, win_fighter_id')
            ->get();
    }
}
