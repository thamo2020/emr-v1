<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient_rec extends Model
{
    use HasFactory;

    protected $fillable = [
        

        'diagnosis',
        'blood_presure' ,
        'pulse_rate' ,
        'respiratory_rate	' ,
        'other' ,
        'investigation',
        'treatments' ,
        'special_notes',
        'user_id'
        
        
];

}
