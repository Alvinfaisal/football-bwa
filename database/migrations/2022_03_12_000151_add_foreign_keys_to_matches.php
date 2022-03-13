<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMatches extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('matches', function (Blueprint $table) {
      //Make relation between matches table and clubs table 
      $table->foreign('clubs_id', 'clubs_id_fk3')->references('id')->on('clubs')->onUpdate('CASCADE')->onDelete('RESTRICT');
      $table->foreign('rivals_id', 'rivals_id_fk3')->references('id')->on('rivals')->onUpdate('CASCADE')->onDelete('RESTRICT');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('matches', function (Blueprint $table) {
      //Jika table matches melakukan penghapusan data maka data yang dihapus hanya foreign key nya saja
      $table->dropForeign('clubs_id_fk3');
      $table->dropForeign('rivals_id_fk3');
    });
  }
}
