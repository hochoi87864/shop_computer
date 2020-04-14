<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = 'transactions';
    public function User()
    {
        return $this->belongsTo(User::class,'tr_user_id');
    }
}
