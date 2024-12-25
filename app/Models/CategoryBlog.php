<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryBlog extends Model
{
   use HasFactory;
  protected $table = 'category_bolgs';

  protected $fillable = [
    'cat_name',
    'cat_slug',
    'cat_img',
    'status',
  ];

  public function blogs()
  {
    return $this->hasMany(Blog::class);
  }

  //Getter Attributes
     public function getImageAttribute($value) {
        return url(Storage::url('category_blogs/'.$value));
    }

}