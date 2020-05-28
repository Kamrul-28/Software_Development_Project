<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'district_name'
    ];

    public function thana()
    {
        return $this->hasMany(Thana::class);
    }
}
