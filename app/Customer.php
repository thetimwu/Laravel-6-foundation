<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Customer extends Model
{
    protected $guarded = [];

    public function format()
    {
        return [
            'name' => $this->name,
            'email' => $this->user->email,
            'verified_at' => $this->user->email_verified_at->diffForHumans()
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
