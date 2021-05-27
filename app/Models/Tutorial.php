<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'material',
        'user_id'
    ];

    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function stages() {
        return $this->hasMany(Stage::class, 'tutorial_id');
    }
}
