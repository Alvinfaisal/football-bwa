<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToManagers extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('managers', function (Blueprint $table) {
      //Make relation between managers table to clubs table
      $table->foreign('clubs_id', 'clubs_id_fk3')->references('id')->on('clubs')->onUpdate('CASCADE')->onDelete('RESTRICT');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('managers', function (Blueprint $table) {
      //Jika tabel manager melakukan penghapusan data maka yang dihapus hanya foreign key tersebut yang bersangkutan 
      $table->dropForeign('clubs_id_fk3');
    });
  }
}
