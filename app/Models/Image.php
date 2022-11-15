<?php

namespace App\Models;

use App\Models\Announce;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];
    
    public function announce()
    {
        return $this->belongsTo(Announce::class);
    }

    public static function getUrlByFilePath($filePath , $w=null , $h=null)
    {
      if(!$w && !$h){
         return Storage::url($filePath);
      }

      $path=dirname($filePath);
      $filename=basename($filePath);
      $file="{$path}/crop_{$w}x{$h}_{$filename}";

      return Storage::url($file);
    }

    public function getUrl($w=null , $h=null)
    {
        return image::getUrlByFilePath($this->path, $w , $h);
    }

}