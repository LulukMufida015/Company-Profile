<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Target;

class Vimi extends Model
{
    use HasFactory;
    protected $table = 'vimi';
    protected $primariKey = 'id';

    protected $fillable = [
        'id',
        'visi',
        'misi',
        'idtarget'
    ];

    public function target()
    {
        return $this->belongsTo(Target::class, 'idtarget');
    }
}
