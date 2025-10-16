<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    /** @use HasFactory<\Database\Factories\PapersFactory> */
    use HasFactory;

   protected $fillable = ['title', 'content'];


    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }

    public function eloquentNotes()
    {
        return $this->hasMany(EloquentNote::class);
    }
}
