<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managers extends Model
{
  // use HasFactory;

  public $table = 'managers';

  protected $fillable = [
    'clubs_id',
    'name',
    'old',
    'nationality',
    'created_at',
    'updated_at'
  ];

  // relation 

  public function clubs()
  {
    // Menjelaskan bahwa field  clubs_id pada table managers berelasi dengan id yang berada pada table clubs
    return $this->belongsTo('App\Models\Clubs', 'clubs_id', 'id');
  }
}
