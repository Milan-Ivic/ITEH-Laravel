<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = ['name', 'address', 'world_rank', 'description'];

    public function faculties()
    {
        return $this->hasMany(Faculty::class);
    }
}
