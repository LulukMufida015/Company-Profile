<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;
    protected $table = 'target';
    protected $primariKey = 'id';

    protected $fillable = [
        'id',
        'kategori'
    ];

    public function visi()
    {
        return $this->hasMany(Vimi::class, 'id');
    }
}
