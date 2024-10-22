<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected  $fillable = [
        'name',
        'description',
        'order',
        'statusRegister',
    ];


    public function getCategorySubCategories()
    {
        return $this->hasMany(CategorySubCategoriesRelation::class, 'category_id', 'id');
    }
}
