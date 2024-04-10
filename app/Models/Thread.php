<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;
    protected $table = 'threads';

    protected $fillable = [
        'thread_cat', 'thread_subject', 'thread_message', 'thread_by',  'thread_description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
