<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;


class FaqSubCategory extends Model
{
    use HasFactory,SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'name',
        'slug'
    ];



    // protected $with = ['faqs'];
    // public function category(){return $this->belongsTo(FaqCategory::class,'category_id','id');}
    public function faqs(){return $this->hasMany(Faq::class,'sub_category_id','id');}
    public function category(){return $this->belongsTo(FaqCategory::class,'category_id','id');}


    /**
     * This function creates/updates the category
     * @param $categoryRequest
     * @purpose admin
     * @return collection
     */
    public static function saveCategory($request)
    {
        $categoryData = [
            'name' => ucwords($request->name),
            'slug'=> Str::slug($request->name),
            'category_id'=> $request->category_id
        ];
        return self::updateOrCreate(['id' => $request->editId],$categoryData);
    }


}
