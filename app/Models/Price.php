<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Price extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;

    public function services()
    {
        return $this->belongsToMany(Service::class, 'prices_services','price_id', 'service_id');
    }
}
