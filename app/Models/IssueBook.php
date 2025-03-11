<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IssueBook extends Model
{
  use HasFactory;
  protected $table = 'issuebooks';

  protected $guarded = [];
}
