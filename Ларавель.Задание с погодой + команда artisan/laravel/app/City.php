<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class City extends Model
{
    protected $table = 'city';

    static function getCity($id){
    	$data = DB::table('city')->select('city')->where('id' , '=' , $id)->get();
    	
    	return $data;
    }
}
