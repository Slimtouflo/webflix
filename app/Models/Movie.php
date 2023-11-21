<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'released_at' => 'datetime',
    ];

    // Définit une relation entre la table movie et category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function duration()
    {
        $hours = floor($this->duration / 60);
        $minutes = $this->duration % 60;
        if ($minutes < 10) {
            $minutes = '0'.$minutes;
        }

        return $hours.'h'.$minutes;
    }
}
