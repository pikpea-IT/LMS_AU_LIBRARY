<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AddMember extends Model
{
  use HasFactory;
  protected $table = 'addmembers';

  protected $guarded = [];
}
