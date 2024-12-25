<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Generation extends Model
{
   use HasFactory;
  protected $table = 'generations';

  protected $guarded = [];

  // protected $fillable = [
  //   'code',
  //   'name',
  //   'name_english',
  //   'description',
  //   'description_english',
  //   'order',
  //   'year',
  //   'status',
  //   'is_current',
  //   'created_at',
  //   'updated_at',
  // ];
}