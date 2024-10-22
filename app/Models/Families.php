<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Families extends Model
{
    use HasFactory;

    protected $table = 'families';
    protected $primaryKey = 'id';

    protected  $fillable = [
        'name',
        'description',
        'order',
        'statusRegister',
    ];

    public function getFamilyCategories()
    {
        return $this->hasMany(FamiliesCategories::class, 'family_id', 'id');
    }
}
