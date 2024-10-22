<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfCareers extends Model
{
    use HasFactory;

    protected $table = 'type_of_careers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
    ];
    
}
