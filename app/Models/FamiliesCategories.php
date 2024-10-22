<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Families;

class FamiliesCategories extends Model
{
    use HasFactory;

    protected $table = 'families_categories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'family_id',
        'category_id',
        'statusRegister'
    ];

    public function getFamily()
    {
        return $this->belongsTo(Families::class, 'id', 'family_id');
    }

    public function findFamily()
    {
        return $this->hasOne(Families::class, 'id', 'family_id');
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
