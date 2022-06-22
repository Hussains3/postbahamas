<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Query extends Model
{
    use HasFactory,SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'subject',
        'phone',
        'message',
        'status'
    ];

    protected $with = ['sender'];

    // Query sender
    public function sender(){return $this->belongsTo(User::class,'user_id','id');}

}
