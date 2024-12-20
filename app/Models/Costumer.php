<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    use HasFactory;

    protected  $table = 'costumers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'phone',
        'taxCode',
        'address_id',
        'statusRegister',
    ];


}
