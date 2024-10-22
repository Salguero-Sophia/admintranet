<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    use HasFactory;

    protected $table = 'stores';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'address',
        'phone',
        'geolocation',
    ];

    public function getCareers()
    {
        return $this->hasMany(Careers::class, 'store_id', 'id');
    }

}
