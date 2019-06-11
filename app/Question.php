<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
