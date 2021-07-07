<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer_Personal_Detail extends Model
{
    use HasFactory;
    //personal data belongs to user
    public function user()
    {
    }
    
    protected $table='employer_personal_details';
    protected $fillable = ['employer_email,city','state'];

}
