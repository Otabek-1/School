<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Teachers extends Model  // Model nomini singular va katta harf bilan yozish
{
    use HasFactory;

    protected $table = 'teachers'; // Jadval nomi
    protected $fillable = ['fullname', 'number', 'gmail', 'work_time', 'lavozim_id', 'image', 'biography'];


    public function lavozim(): HasOne
    {
       return $this->hasOne(Lavozim::class,'id');
    }
}
