<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public $timestamps = true;

    protected $table = 'answers';

    protected $fillable = [
        'content',
        'problem_id',
        'user_id',
        'is_correct'
    ];

    public function problem()
    {
        return $this->belongsTo('App\Problem');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
