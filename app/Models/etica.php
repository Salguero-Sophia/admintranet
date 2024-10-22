<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etica extends Model
{
    use HasFactory;
    protected $table = 'etica';
    protected $primaryKey = 'id';

    protected $fillable = [
        'comments',
        'country',
        'firstname',
        'phonenumber',
    ];
    
}

