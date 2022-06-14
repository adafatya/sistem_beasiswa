<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'poin_spkk',
        'ipk',
        'penghasilan',
        'pengeluaran',
        'tanggungan',
    ];
}
