<?php

namespace App\Http\Controllers;
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;

use Illuminate\Http\Request;

class Weather extends Controller
{
    public function index(){
    	$token =  env('CITE_TOKEN_WEATHER');
    	$url = env('URL_WEATHER');
    	$town = $_POST['town'];
    	$param = [
    		'q' => $town,
    		'appid' => $token
    	];
    	$url_update = $url . http_build_query($param);
    	$result = (json_decode(file_get_contents($url_update), JSON_OBJECT_AS_ARRAY));
    	$result = $result['main']['temp'] - 273;
        return view('weather')->withTown($town)->withWeather($result);
    }
}

?>