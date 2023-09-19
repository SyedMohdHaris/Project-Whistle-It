<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class channel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        
    ];
    public function teams(){
        return $this->belongsTo('teams');
    }

}
