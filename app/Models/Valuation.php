<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valuation extends Model
{
    use HasFactory;

    protected $table = "valuations";

    public function valuation_details(){
        return $this->hasMany(ValuationDetails::class);
    }
}
