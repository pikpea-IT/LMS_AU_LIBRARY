<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryBook extends Model
{
    use HasFactory;
  protected $table = 'category_books';

  protected $guarded = [];
}