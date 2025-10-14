<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Photo extends Model {
    use HasFactory;

    protected $fillable = ['title', 'url'];

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
