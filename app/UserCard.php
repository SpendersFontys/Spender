<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Card;

class UserCard extends Model
{
    protected $table = 'user_card';
    public function setAttributes()
    {
        $this->attributes['card'] = Card::find($this->card_id);
        $this->attributes['user'] = User::find($this->user_id);
    }
}
