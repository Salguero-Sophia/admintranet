<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelProductRelation extends Model
{
    use HasFactory;

    protected $table = 'level_product_relations';
    protected $primaryKey = 'id';

    protected $fillable = [
        'level_id',
        'product_id',
        'statusRegister'
    ];

    public function getLevel()
    {
        return $this->belongsTo(Level::class, 'level_id', 'id');
    }

    public function getProduct()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
