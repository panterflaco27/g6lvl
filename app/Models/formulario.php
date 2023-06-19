<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formulario extends Model
{
    use HasFactory;

    protected $fillable =[
        'radio-correo',
        'radio-paq',
        'check-face',
        'check-whp',
        'check-ins',
        'check-tk',
        'check-tlm',
        'radio-com',
        'radio-pw',
        'radio-yt',
        'radio-fp',
        'radio-pc',
        'radio-tb',
        'radio-md',
        'radio-hm',
        'radio-ic',
        'radio-ec',
        'radio-nc',
    ];
}
