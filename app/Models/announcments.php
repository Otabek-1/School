<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class announcments extends Model
{
    use HasFactory;

    protected $table = 'announcments';
    protected $fillable = ['title', 'body','image']; 
}
