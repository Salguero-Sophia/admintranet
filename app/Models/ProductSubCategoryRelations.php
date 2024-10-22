<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSubCategoryRelations extends Model
{
    use HasFactory;

    protected $table = 'product_sub_category_relations';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_id',
        'sub_category_id',
        'statusRegister'
    ];


    public function getProduct()
    {
        return $this->belongsTo(Product::class, 'id', 'product_id');
    }

    public function getSubCategory()
    {
        return $this->hasOne(SubCategories::class, 'id', 'sub_category_id');
    }
}
