<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Event;
use Carbon\Carbon;

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

    public function redFighter()
    {
        return $this->belongsTo(Fighter::class, 'red_fighter_id');
    }

    public function blueFighter()
    {
        return $this->belongsTo(Fighter::class, 'blue_fighter_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * 注目カードを取得（過去の大会は除外）
     * 
     * 勝利予想数が多いカード
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function scopeGetAttentionFights($query, $options = [])
    {
        $event_ids = Event::where('date', '>', Carbon::now())->get()->pluck('id');
        return $query
            ->with('predicts')
            ->withCount('predicts')
            ->orderBy('predicts_count', 'desc')
            ->whereIn('id', $event_ids)
            ->get();
    }
}
