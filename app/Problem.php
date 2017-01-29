<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    public $timestamps = true;

    protected $table = 'problems';

    protected $fillable = [
        'name',
        'content',
        'answer',
        'point',
        'is_show',
    ];

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
