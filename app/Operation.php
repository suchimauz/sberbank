<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    protected $fillable = ['amount', 'status', 'type', 'subject', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function subject_user() {
        return $this->belongsTo('App\User', 'subject');
    }
}
