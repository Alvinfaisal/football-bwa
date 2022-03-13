<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToClubs extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('clubs', function (Blueprint $table) {
      //make relation between table clubs and stadiums
      // Ada pada kelas orm laravel bwa
      $table->foreign('stadiums_id', 'stadiums_id_fk1')->references('id')->on('stadiums')->onUpdate('CASCADE')->onDelete('RESTRICT');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('clubs', function (Blueprint $table) {
      //Jika tabel clubs melakukan penghapusan data maka yang didrop/hapus adalah foreign key tersebut
      $table->dropForeign('stadiums_id_fk1');
    });
  }
}
