<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city' , '100');
            $table->timestamps();
        });
        DB::table('city')->insert(['city' => 'Kremenchuk']);
        DB::table('city')->insert(['city' => 'Kiev']);
        DB::table('city')->insert(['city' => 'London']);
        DB::table('city')->insert(['city' => 'Lviv']);
        DB::table('city')->insert(['city' => 'Kharkov']);
        DB::table('city')->insert(['city' => 'Poltava']);
        DB::table('city')->insert(['city' => 'Moscow']);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city');
    }
}
