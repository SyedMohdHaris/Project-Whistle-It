<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'owner',
        'description',
    ];


    public function users()
    {
        return $this->hasMany(user::class);
    } 
}
