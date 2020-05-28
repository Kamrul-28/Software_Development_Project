<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    protected $fillable = [
        'thana_name','district_id'
    ];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function school()
    {
        return $this->hasMany(School::class);
    }
}
