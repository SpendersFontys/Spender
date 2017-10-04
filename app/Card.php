<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;

class Card extends Model
{

    protected $table = 'card';

    public function setAttributes()
    {
        $this->attributes['company'] = Company::find($this->company_id);
    }

}
