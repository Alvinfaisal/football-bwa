<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadiums extends Model
{
  // use HasFactory;

  // Nama tabel pada database - dan menginisiasi bahwa ini model dari table stadiums
  public $table = 'stadiums';

  // Fillable yang boleh diisi - untuk field id tidak perlu didaftarkan karena akan terisi otomatis increment
  protected $fillable = [
    'name',
    'capacity',
    'address',
    'created_at',
    'updated_at'
  ];

  // Relation 

  // Relasi antara tabel stadiums dengan tabel clubs, karena tabel clubs membutuhkan stadiums_id yang didapat dari id tabel stadiums. dengan relasi hasOne (Satu club mempunyai satu stadium dan satu stadium dimiliki oleh satu club)
  public function clubs()
  {
    return $this->hasOne('App\Models\Clubs', 'stadiums_id');
  }
}
