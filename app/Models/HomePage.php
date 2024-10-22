<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;

    protected $table = 'home_pages';
    protected $primaryKey = 'id';

    protected  $fillable = [
        'section',
        'name',
        'image_path',
        'href',
        'updated_by',
        'order',
        'created_at',
        'updated_at',
    ];
}
