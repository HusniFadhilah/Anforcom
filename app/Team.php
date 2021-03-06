<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    protected $fillable = [
        'name', 'competition_id', 'university'
    ];

    public function leader()
    {
        return $this->belongsTo(User::class, 'leader_id');
    }

    public function submissions()
    {
        return $this->hasMany(Submission::class);
    }
}
