<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessRelation extends Model
{
    use HasFactory;

    public function farmer()
    {
    return $this->belongsTo(User::class, 'farmer_id');
    }

    public function distributor()
    {
    return $this->belongsTo(User::class, 'distributor_id');
    }

    public function investor()
    {
    return $this->belongsTo(User::class, 'investor_id');
    }

}
