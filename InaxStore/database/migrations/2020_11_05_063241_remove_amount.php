<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveAmount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
      {
          Schema::table('bills', function($table) {
             $table->dropColumn('amount');
            
          });
      }

      public function down()
      {
          Schema::table('bills', function($table) {
             $table->string('amount');
          });
      }
}
