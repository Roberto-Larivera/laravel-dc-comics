<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    // non sono mass assignment
    // protected $guarded = [];

    // sono mass assignment
   protected $fillable = [
    'title',
    'description',
    'url',
    'price',
    'series',
    'sale_date',
    'type'
   ];
}
