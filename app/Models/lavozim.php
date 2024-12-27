<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lavozim extends Model
{
    use HasFactory;

    protected $table = 'lavozims'; // Jadval nomi
    protected $fillable = ['name']; // Mass-assignable ustunlar

    // Lavozimga bog'langan Teacherlar
    public function teachers(): BelongsTo
    {
        return $this->belongsTo(Teachers::class);
    }
}
