<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manuscript extends Model
{
    public $fillable = ['coverletter','title','abstract','keywords','comment','docfiles'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}