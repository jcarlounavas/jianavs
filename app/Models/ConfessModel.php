<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConfessModel extends Model
{
    //
    protected $table = 'confessions';
    protected $fillable = ['user_id', 'confess'];
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(UserConfession::class, 'user_id');
    }

    
}


