<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor_info extends Model
{
    public function donor()
    {
        return $this->hasOne(Donor::class);
    }
}
