<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table    = 'albums';
    protected $fillable = ['artist_id','name','year'];

    public function artist(){
        return $this->belongsTo(Artist::class,'artist_id');
    }

    public static function fetchAllWithArtistName() {
        return Album::with(['artist'])->get()->map( function ($collection)
        {
            return Album::getAlbumWithArtistNameFromCollection($collection);
        });
    }

    public static function fetchByIdWithArtistName($id) {
        return Album::with(['artist'])->where('id',$id)->get()->map( function ($collection)
        {
            return Album::getAlbumWithArtistNameFromCollection($collection);
        });
    }

    private static function getAlbumWithArtistNameFromCollection($collection) {
        return array_merge($collection->only(['id', 'name', 'artist_id']),['artist_name' => $collection['artist']->only(['name'])['name']]);
    }
}
