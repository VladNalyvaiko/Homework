<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Weather extends Model
{
    protected $table = 'weather';

    static function addWeather($weather , $id_city)
    {

    	DB::table('weather')->insert(
    		['weather' => $weather , 'id_city' => $id_city , 'created_at' => date("Y-m-d H:i:s")]
    	);
    }
}
