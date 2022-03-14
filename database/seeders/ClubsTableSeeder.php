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
    // DB::table('clubs')->truncate();

    $clubs = [
      [
        'stadiums_id' => '1',
        'name' => 'Chelsea Fc',
        'logo' => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
        'url' => 'www.chelsea.com',
        'thropy' => 19,
        'created_at' => '2022-03-12 00:00:00',
        'updated_at' => '2022-03-12 00:00:00',
      ],
      [
        'stadiums_id' => '2',
        'name' => 'Manchester United',
        'logo' => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
        'url' => 'www.chelsea.com',
        'thropy' => 19,
        'created_at' => '2022-03-12 00:00:00',
        'updated_at' => '2022-03-12 00:00:00',
      ],
      [
        'stadiums_id' => '3',
        'name' => 'Arsenal',
        'logo' => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
        'url' => 'www.chelsea.com',
        'thropy' => 19,
        'created_at' => '2022-03-12 00:00:00',
        'updated_at' => '2022-03-12 00:00:00',
      ],
      [
        'stadiums_id' => '4',
        'name' => 'Manchester City',
        'logo' => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
        'url' => 'www.chelsea.com',
        'thropy' => 19,
        'created_at' => '2022-03-12 00:00:00',
        'updated_at' => '2022-03-12 00:00:00',
      ],
      [
        'stadiums_id' => '5',
        'name' => 'Totenham Hotspur',
        'logo' => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
        'url' => 'www.chelsea.com',
        'thropy' => 19,
        'created_at' => '2022-03-12 00:00:00',
        'updated_at' => '2022-03-12 00:00:00',
      ],
      [
        'stadiums_id' => '6',
        'name' => 'Liverpool Fc',
        'logo' => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
        'url' => 'www.chelsea.com',
        'thropy' => 19,
        'created_at' => '2022-03-12 00:00:00',
        'updated_at' => '2022-03-12 00:00:00',
      ],
    ];


    Clubs::insert($clubs);
  }
}
