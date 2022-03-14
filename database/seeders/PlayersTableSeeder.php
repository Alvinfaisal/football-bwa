<?php

namespace Database\Seeders;

use App\Models\Players;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    DB::table('players')->truncate();

    $players = [
      [
        'clubs_id' => 1,
        'photo' => 'https://resources.premierleague.com/premierleague/photos/players/25ex258/p165153. png',
        'name'       => 'Timo Werner',
        'height'     => '180',
        'Position'   => 'Forward',
        'created at' => '2021-03-21 00:00:00',
        'updated at' => '2021-03-21 00:00:00',
      ],

      [
        'clubs_id' => 2,
        'photo' => 'https://resources.premierleague.com/premierleague/photos/players/25ex258/p165153. png',
        'name'       => 'Timo Werner',
        'height'     => '180',
        'Position'   => 'Forward',
        'created at' => '2021-03-21 00:00:00',
        'updated at' => '2021-03-21 00:00:00',
      ],

      [
        'clubs_id' => 3,
        'photo' => 'https://resources.premierleague.com/premierleague/photos/players/25ex258/p165153. png',
        'name'       => 'Timo Werner',
        'height'     => '180',
        'Position'   => 'Forward',
        'created at' => '2021-03-21 00:00:00',
        'updated at' => '2021-03-21 00:00:00',
      ],

      [
        'clubs_id' => 4,
        'photo' => 'https://resources.premierleague.com/premierleague/photos/players/25ex258/p165153. png',
        'name'       => 'Timo Werner',
        'height'     => '180',
        'Position'   => 'Forward',
        'created at' => '2021-03-21 00:00:00',
        'updated at' => '2021-03-21 00:00:00',
      ],

      [
        'clubs_id' => 5,
        'photo' => 'https://resources.premierleague.com/premierleague/photos/players/25ex258/p165153. png',
        'name'       => 'Timo Werner',
        'height'     => '180',
        'Position'   => 'Forward',
        'created at' => '2021-03-21 00:00:00',
        'updated at' => '2021-03-21 00:00:00',
      ],

      [
        'clubs_id' => 6,
        'photo' => 'https://resources.premierleague.com/premierleague/photos/players/25ex258/p165153. png',
        'name'       => 'Timo Werner',
        'height'     => '180',
        'Position'   => 'Forward',
        'created at' => '2021-03-21 00:00:00',
        'updated at' => '2021-03-21 00:00:00',
      ],

    ];

    Players::insert($players);
  }
}
