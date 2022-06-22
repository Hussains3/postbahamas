<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShippingAddress extends Model
{
    use HasFactory,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'street',
        'address_text',
        'island',
        'prefered_location',
        'user_id'
    ];

    protected $with = ['location'];

    public function location()
    {
        return $this->hasOne(ShippingLocation::class,'id','prefered_location');
    }
}
