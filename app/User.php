<?php

namespace App;

use App\Operation;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function balance() {
        $refill =   Operation::where('user_id', $this->id)
                        ->where('status', 'success')
                        ->whereIn('type', array('incoming', 'refill'))
                        ->sum('amount');
        $withdraw = Operation::where('user_id', $this->id)
                        ->where('status', 'success')
                        ->whereIn('type', array('transfer', 'withdraw'))
                        ->sum('amount');

        return $refill - $withdraw;
    }
}
