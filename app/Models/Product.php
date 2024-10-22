<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected  $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'postItem_id',
        'name',
        'description',
        'price',
        'comment',
        'image',
        'productParent_id',
        'useTakeOutPrice',
        'quantity',
        'isDefault',
        'showInMenu',
        'statusRegister',
    ];

    public function levels()
    {
        return $this->hasMany(Level::class, 'product_id', 'id');
    }

    public function getProductCategoryRelation()
    {
        return $this->hasMany(ProductCategoryRelations::class, 'product_id', 'id');
    }

    public function getProductSubCategoryRelation()
    {
        return $this->hasMany(ProductSubCategoryRelations::class, 'product_id', 'id');
    }

    public function getProductCategory()
    {
        return $this->hasOne(ProductCategoryRelations::class, 'product_id', 'id');
    }

    public function getProductSubCategory()
    {
        return $this->hasOne(ProductSubCategoryRelations::class, 'product_id', 'id');
    }
}
