<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = ['firstName',	'lastName',	'jalan', 'kecamatan', 'kota', 'provinsi', 'kodePos', 'negara', 'tanggalLahir', 'email', 'noHp', 'nisn', 'un', 'photo'];
}
