<?php

namespace App\Models;


use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announce extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'description',
        'price',
        // 'category_id',
        // 'image',
    ];

    public function toSearchableArray(){
        $category=$this->category;
        $array=[
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'category'=>$category,
        ];
        return $array;
    }

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

    public function images(){
        
        return $this->hasMany(Image::class);
    }
}
