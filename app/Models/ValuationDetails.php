<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValuationDetails extends Model
{
    use HasFactory;

    protected $table = "valuation_details";

    public function valuation(){
        return $this->belongsTo(valuation::class);
    }
}
