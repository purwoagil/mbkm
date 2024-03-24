<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class mbkm extends Model
{
    use HasFactory;

    protected $table = 'mbkm';
    protected $fillable = [

        'kodeMBKM',
        'kodeMatkul',
        'nik',
        'nim',
        'namaMitra',
        'jenisProgram',
        'jenisSkema',
        'periode'
    ];

    // protected static function booted()
    // {
    //     parent::boot();

    //     // Listen for the "creating" event to generate and set the random string
    //     static::creating(function ($model) {
    //         $model->kodeMbkm = Str::random(5); // Adjust the length as needed
    //     });
    //     // static::creating(function ($model) {
    //     //     $model->kodeMbkm = $randomCode = Str::random($5);;
    //     // });
    // }

}
