<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategoryRelations extends Model
{
    use HasFactory;

    protected $table = 'product_category_relations';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_id',
        'category_id',
        'statusRegister'
    ];


    public function getProduct()
    {
        return $this->belongsTo(Product::class, 'id', 'product_id');
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function getSubCategoryRelation()
    {
        return $this->hasOne(FamiliesCategories::class, 'category_id', 'category_id');
    }
}
