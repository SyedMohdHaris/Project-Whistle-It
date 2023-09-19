<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageLog extends Model
{
    use HasFactory;

    protected $fillable = ['senderId','receiverId','content','messagetype','dataType'];

    public function users(){

        return $this->belongsTo('users');
    }

    public function channels(){

        return $this->belongsTo('channel');
    }
}
