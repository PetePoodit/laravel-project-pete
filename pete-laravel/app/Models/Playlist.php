<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Enum\PlaylistAccessibility;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Playlist extends Model
{
    use SoftDeletes;

    protected $fillable = [ 'name' ];

    protected function casts(): array
    {
        return [
            'accessibility' => PlaylistAccessibility::class,
            'created_at' => 'datetime',
        ];
    }
    
    public function songs(): BelongsToMany
    {
        return $this->belongsToMany(Song::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
