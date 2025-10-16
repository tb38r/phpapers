<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EloquentNote extends Model
{
    /** @use HasFactory<\Database\Factories\EloquentNoteFactory> */
    use HasFactory;

    protected $fillable = ['content'];


    public function paper()
    {
        return $this->belongsTo(Paper::class);
    }
}
