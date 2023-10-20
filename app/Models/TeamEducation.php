<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamEducation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function team(){
        return $this->belongsTo(Team::class);
    }
}
