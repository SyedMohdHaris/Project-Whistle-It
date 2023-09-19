<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class request extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'requestType',
        'reciverName',
    ];

    public function users()
    {
        return $this->hasMany("users");

    }
}
