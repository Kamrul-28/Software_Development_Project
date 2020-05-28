<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'school_name','district_id','thana_id'
    ];

    public function thana()
    {
        return $this->belongsTo(Thana::class);
    }

    public function donor()
    {
        return $this->hasMany(Donor::class);
    }

}
