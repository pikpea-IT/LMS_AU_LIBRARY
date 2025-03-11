<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AddBook extends Model
{
  use HasFactory;
  protected $table = 'addbooks';

  protected $guarded = [];
}
