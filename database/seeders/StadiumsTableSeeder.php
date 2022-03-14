<?php

namespace Database\Seeders;

use App\Models\Stadiums;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StadiumsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //Trunctae
    DB::table('stadiums')->truncate();

    $stadiums = [
      [
        'name' => 'Stamford Bridge',
        'capacity' => '40000',
        'address' => 'Stamford Bridge, Fulham Road, London SW6 1HS',
        'created_at' => '2022-03-21 00:00:00',
        'updated_at' => '2022-03-21 00:00:00',
      ],

      [
        'name' => 'Stamford Bridge',
        'capacity' => '40000',
        'address' => 'Stamford Bridge, Fulham Road, London SW6 1HS',
        'created_at' => '2022-03-21 00:00:00',
        'updated_at' => '2022-03-21 00:00:00',
      ],

      [
        'name' => 'Stamford Bridge',
        'capacity' => '40000',
        'address' => 'Stamford Bridge, Fulham Road, London SW6 1HS',
        'created_at' => '2022-03-21 00:00:00',
        'updated_at' => '2022-03-21 00:00:00',
      ],

      [
        'name' => 'Stamford Bridge',
        'capacity' => '40000',
        'address' => 'Stamford Bridge, Fulham Road, London SW6 1HS',
        'created_at' => '2022-03-21 00:00:00',
        'updated_at' => '2022-03-21 00:00:00',
      ],

      [
        'name' => 'Stamford Bridge',
        'capacity' => '40000',
        'address' => 'Stamford Bridge, Fulham Road, London SW6 1HS',
        'created_at' => '2022-03-21 00:00:00',
        'updated_at' => '2022-03-21 00:00:00',
      ],

      [
        'name' => 'Stamford Bridge',
        'capacity' => '40000',
        'address' => 'Stamford Bridge, Fulham Road, London SW6 1HS',
        'created_at' => '2022-03-21 00:00:00',
        'updated_at' => '2022-03-21 00:00:00',
      ],
    ];

    Stadiums::insert($stadiums);
  }
}
