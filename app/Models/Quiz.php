<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;

class Quiz extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title','description','slug','status','finished_at'];

    protected $dates = ['finished_at']; 

    protected $appends = ['details'];

    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }

    public function getFinishedAtAttribute($date)
    {
        return $date ? Carbon::parse($date) : null;
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function my_result()
    {
        return $this->hasOne('App\Models\Result')->where('user_id', auth()->user()->id);
    }

    public function results()
    {
        return $this->hasMany('App\Models\Result');
    }

    public function getDetailsAttribute()
    {
        if($this->results()->count()>0)
        {
            return [
                'average' => round($this->results()->avg('point')),
                'join_count' => $this->results()->count()
            ];
        }
        return null;
      
    }

    public function topTen()
    {
        return $this->results()->orderByDesc('point')->take(10);
    }
}
