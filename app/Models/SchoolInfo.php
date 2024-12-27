<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolInfo extends Model
{
    use HasFactory;

    protected $table = 'school_info'; // Jadval nomi
    protected $fillable = ['info_name', 'info_count']; // Mass-assignable ustunlar
}
