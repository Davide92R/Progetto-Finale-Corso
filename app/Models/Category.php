<?php

namespace App\Models;

use App\Models\Announce;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'category_name'
    ];

    public function announces()
    {
        return $this->hasMany(Announce::class);
    }
}
