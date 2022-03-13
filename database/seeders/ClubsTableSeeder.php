<?php

namespace Database\Seeders;

use App\Models\Clubs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //truncate DB
    // Sebelum file seeder mengisi tabel, terlebih dahulu melakukan truncate, truncate adalah melakukan penghapusan sebuah tabel agar increment nya dari 0 kembali
    DB::table('clubs')->truncate();

    $clubs = [
      [
        'stadiums_id' => '1',
        'name' => 'Chelsea Fc',
        'logo' => 'https://source.unsplash.com/1600x900/?logo',
        'url' => 'www.chelsea.com',
        'thropy' => 19,
        'created_at' => '2022-03-12 00:00:00',
        'updated_at' => '2022-03-12 00:00:00',
      ],
    ];

    Clubs::insert($clubs);
  }
}
