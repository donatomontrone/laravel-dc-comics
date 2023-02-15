<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = array('title', 'description', 'img_path', 'price', 'sale_date', 'series', 'type');
}
