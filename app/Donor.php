<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function donor_info()
    {
        return $this->hasOne(Donor_info::class);
    }

    public function donation()
    {
        return $this->hasMany(Donation::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

}
