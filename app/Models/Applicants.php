<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicants extends Model
{
    use HasFactory;

    protected $table = 'applicants';
    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'street_address',
        'city',
        'state_province',
        'zip_postal_code',
        'about',
        'attachment_info',
        'career_id',
        'created_at',
    ];

    public function getCareer()
    {
        return $this->belongsTo(Careers::class, 'career_id', 'id');
    }
}
