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
        return $this->belongsTo('App\Models\User');
    }
    
    protected $table='employer_personal_details';
    protected $fillable = ['city','state','user_id'];

}
