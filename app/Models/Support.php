<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    public $table = 'supports';

    protected $fillable = [
        'name', 'email', 'message'
    ];

    use HasFactory;
}
