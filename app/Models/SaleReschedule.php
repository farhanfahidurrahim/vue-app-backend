<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleReschedule extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function getSale()
    {
        return $this->belongsTo(Sale::class, 'sale_id');
    }
}
