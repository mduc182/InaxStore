<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
      {
          Schema::table('products', function($table) {
             $table->dropColumn('amount');
            
          });
      }

      public function down()
      {
          Schema::table('products', function($table) {
             $table->string('amount');
          });
      }
}
