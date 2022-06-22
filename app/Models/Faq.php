<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
    use HasFactory,SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug'
    ];




    public function category(){return $this->belongsTo(FaqCategory::class,'category_id','id');}
    public function subcategory(){return $this->belongsTo(FaqSubCategory::class,'sub_category_id','id');}

}
