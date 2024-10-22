<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorySubCategoriesRelation extends Model
{
    use HasFactory;

    protected $table = 'categories_relations';
    protected $primaryKey = 'id';

    protected $fillable = [
        'category_id',
        'sub_category_id',
        'statusRegister'
    ];

    public function getCategory()
    {
        return $this->belongsTo(Category::class, 'id', 'category_id');
    }

    public function getSubCategory()
    {
        return $this->hasOne(SubCategories::class, 'id', 'sub_category_id');
    }
}
