<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer_Professional_Detail extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    protected $table='employer_professional_details';

    protected $fillable = [
        'employer_email',
        'company_name',
        'company_website',
        'tc',
        'docs',
        'phone',
        'location',
    ];

    
}
