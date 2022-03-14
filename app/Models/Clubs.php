<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
  // use HasFactory;

  public $table = 'clubs';

  protected $fillable = [
    'stadiums_id',
    'name',
    'logo',
    'url',
    'thropy',
    'created_at',
    'updated_at'
  ];

  // yang membedakan relasi seperti hasmany atau hasone hanya pada table utamanya saja - tabel utama yaitu tabel yang dibuthkan fieldnya oleh tabel lain contoh tabel utama disini yaitu table clubs, table clubs dibuthkan datanya oleh tabel managers

  // relation 

  public function stadiums()
  {
    // Menjelaskan bahwa field  stadiums_id pada table club berelasi dengan id yang berada pada table stadiums
    return $this->belongsTo('App\Models\Stadiums', 'stadiums_id', 'id');
  }

  public function managers()
  {
    // Apa sih relasi yang ada ditable managers untuk berelasi ke table clubs? yaitu menggunakan field clubs_id
    // Satu clubs bisa punya banyak manager
    return $this->hasMany('App\Models\Managers', 'clubs_id');
  }

  public function players()
  {
    // Apa sih relasi yang ada ditable players untuk berelasi ke table clubs? yaitu menggunakan field clubs_id
    // Satu clubs bisa punya banyak player
    return $this->hasMany('App\Models\Players', 'clubs_id');
  }

  public function match_clubs()
  {
    return $this->hasOne('App\models\Matches', 'clubs_id');
  }

  public function match_rivals()
  {
    return $this->hasOne('App\models\Matches', 'clubs_id');
  }
}
