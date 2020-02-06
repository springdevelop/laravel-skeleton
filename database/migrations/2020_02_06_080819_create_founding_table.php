<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoundingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foundings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date_founding')->useCurrent = true;
            $table->double('founding')->default(0);
            $table->double('current')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('foundings', function (Blueprint $table) {
            //
        });
    }
}
