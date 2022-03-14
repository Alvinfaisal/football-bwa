<?php

namespace Database\Seeders;

use App\Models\Matches;
use App\Models\Players;
use App\Models\Stadiums;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    $this->call([
      StadiumsTableSeeder::class,
      ClubsTableSeeder::class,
      ManagersTableSeeder::class,
      PlayersTableSeeder::class,
      MatchesTableSeeder::class,
    ]);
  }
}
