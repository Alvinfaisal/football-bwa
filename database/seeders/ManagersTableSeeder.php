<?php

namespace Database\Seeders;

use App\Models\Managers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ManagersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {


    $managers = [
      [
        'clubs_id' => 1,
        'photo'    => 'https://resources.prenierleague.com/prenierleague/photos/players/250x250/man39237.png',
        'name'     => 'Thomas Tuchel ',
        'old'      => '47',
        'nationality'  => 'Germany',
        'created_at'   => '2021-03-21 00:00:00',
        'updated_at'   => '2021-03-21 00:00:00',
      ],

      [
        'clubs_id' => 2,
        'photo'    => 'https://resources.prenierleague.com/prenierleague/photos/players/250x250/man39237.png',
        'name'     => 'Thomas Tuchel ',
        'old'      => '47',
        'nationality'  => 'Germany',
        'created_at'   => '2021-03-21 00:00:00',
        'updated_at'   => '2021-03-21 00:00:00',
      ],

      [
        'clubs_id' => 3,
        'photo'    => 'https://resources.prenierleague.com/prenierleague/photos/players/250x250/man39237.png',
        'name'     => 'Thomas Tuchel ',
        'old'      => '47',
        'nationality'  => 'Germany',
        'created_at'   => '2021-03-21 00:00:00',
        'updated_at'   => '2021-03-21 00:00:00',
      ],

      [
        'clubs_id' => 4,
        'photo'    => 'https://resources.prenierleague.com/prenierleague/photos/players/250x250/man39237.png',
        'name'     => 'Thomas Tuchel ',
        'old'      => '47',
        'nationality'  => 'Germany',
        'created_at'   => '2021-03-21 00:00:00',
        'updated_at'   => '2021-03-21 00:00:00',
      ],

      [
        'clubs_id' => 5,
        'photo'    => 'https://resources.prenierleague.com/prenierleague/photos/players/250x250/man39237.png',
        'name'     => 'Thomas Tuchel ',
        'old'      => '47',
        'nationality'  => 'Germany',
        'created_at'   => '2021-03-21 00:00:00',
        'updated_at'   => '2021-03-21 00:00:00',
      ],

      [
        'clubs_id' => 6,
        'photo'    => 'https://resources.prenierleague.com/prenierleague/photos/players/250x250/man39237.png',
        'name'     => 'Thomas Tuchel ',
        'old'      => '47',
        'nationality'  => 'Germany',
        'created_at'   => '2021-03-21 00:00:00',
        'updated_at'   => '2021-03-21 00:00:00',
      ],



    ];

    Managers::insert($managers);
  }
}
