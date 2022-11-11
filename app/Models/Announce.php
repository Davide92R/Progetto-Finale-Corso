<?php

namespace App\Models;


use App\Models\Category;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announce extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        // 'category_id',
        // 'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // funzione per accettazione del Revisore
    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount(){
        return Announce::where('is_accepted', null)->count();
    }
}
