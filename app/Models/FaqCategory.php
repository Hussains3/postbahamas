<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;


class FaqCategory extends Model
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

    protected $with = ['subcategory'];

    public function subcategory(){
        return $this->hasMany(FaqSubCategory::class,'category_id','id')->with('faqs');
    }



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
            'slug'=> Str::slug($request->name)
        ];
        return self::updateOrCreate(['id' => $request->editId],$categoryData);
    }
}
