<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [
        'created_at',
        'updated_at',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function fights()
    {
        return $this->hasMany(Fight::class);
    }

    public function scopeGetEventByName($query, $options)
    {
        return $query->where('name', $options['name']);
    }

    /**
     * 直近のイベントを取得（過去のイベントは除外）
     * 
     * @return App\Models\Event|null
     */
    public function scopeGetAttentionEvent($query, $options = [])
    {
        return $query->where('date', '>', Carbon::now())->first();
    }

    /**
     * dateカラムのデータをフォーマットして表示
     * 
     * @param string $format
     * @return string
     */
    public function formatDate($format = 'Y/m/d')
    {
        return date($format, strtotime($this->date));
    }
}
