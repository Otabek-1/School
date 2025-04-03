<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teachers extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $fillable = ['fullname', 'number', 'gmail', 'work_time', 'lavozim_id', 'image', 'biography'];

    public function lavozim(): HasOne
    {
        return $this->hasOne(Lavozim::class, 'id', 'lavozim_id');
    }
    

    public function circle(): HasMany
    {
        return $this->hasMany(qoshimchaDars::class, 'teacher_id');
    }
}
