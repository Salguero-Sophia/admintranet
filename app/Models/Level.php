<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $table = 'levels';
    protected $primaryKey = 'id';

    protected $fillable = [
        'numberLevel',
        'codeLevel',
        'nameLevel',
        'description',
        'product_id',
        'statusRegister'
    ];

    public function getProduct()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function getProductRelation()
    {
        return $this->hasMany(LevelProductRelation::class, 'level_id', 'id');
    }
}
