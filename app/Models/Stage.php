<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'content',
        'image',
        'tutorial_id'
    ];

    public function owner() {
        return $this->belongsTo(Tutorial::class, 'tutorial_id');
    }
}
