<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadiums extends Model
{
  // use HasFactory;

  // Nama tabel pada database
  public $table = 'stadiums';

  // Fillable yang boleh diisi - untuk field id tidak perlu didaftarkan karena akan terisi otomatis increment
  protected $fillable = [
    'name',
    'capacity',
    'address',
    'created_at',
    'updated_at'
  ];
}
