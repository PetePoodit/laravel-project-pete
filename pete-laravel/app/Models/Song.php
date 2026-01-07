<?php

namespace App\Models;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Song extends Model
{
    use SoftDeletes , HasFactory;

    protected $fillable = [
        'title',
        'artist_id',
        'duration',
    ];

    public function artist() : BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

    public function Playlists()
    {
        return $this->belongsToMany(Playlist::class);
    }
}
