<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClubMember extends Model
{
  use HasFactory;
  protected $table = 'clubmembers';

  protected $guarded = [];
}
