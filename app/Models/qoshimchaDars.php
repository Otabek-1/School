<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class qoshimchaDars extends Model
{
    protected $table = 'qoshimcha_dars'; // Jadval nomi
    protected $fillable = ['name', 'participants', 'teacher_id', 'work_days', 'work_time', 'classes'];

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teachers::class, 'teacher_id');
    }
}
