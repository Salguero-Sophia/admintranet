<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory;

    protected $table = 'careers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'we_offer',
        'requirements',
        'salary_range',
        'store_id',
        'type_id',
        'is_active',
        'created_at',
        'updated_at',
    ];

    public function getStore()
    {
        return $this->belongsTo(Stores::class, 'store_id', 'id');
    }

    public function getTypeCareer()
    {
        return $this->hasOne(TypeOfCareers::class, 'id', 'type_id');
    }

    public function getApplicants()
    {
        return $this->hasMany(Applicants::class, 'career_id', 'id');
    }
}
