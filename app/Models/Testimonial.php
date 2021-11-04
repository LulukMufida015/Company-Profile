<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimoni';
    protected $primaryKey = 'id';

    public $fillable = [
        'id',
        'nama',
        'kategori',
        'testi'
    ];
}
