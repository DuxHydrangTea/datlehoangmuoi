<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'description',
        'read_at',
        'agree',
        'message',
    ];
    public function scopeNotRead($query)
    {
        return $query->where('read_at', null);
    }
}