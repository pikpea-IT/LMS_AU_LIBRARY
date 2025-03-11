<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReturnBook extends Model
{
  use HasFactory;
  protected $table = 'returnbooks';

  protected $guarded = [];
}
