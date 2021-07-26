<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $table    = 'artists';
    protected $fillable = ['id','name','twitter'];

    public function album(){
        return $this->hasMany(Album::class);
    }
}
