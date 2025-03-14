<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = "province";

    public function getProvinceNameAttribute()
    {
        return $this->_name;
    }
}
