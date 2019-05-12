<?php

namespace App\Console\Commands;
use App\City;
use App\Weather as WeatherModel;
use Illuminate\Console\Command;

class Weather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:weather';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $id = $this->ask('Напишите id города');
        $city = City::getCity($id);
        $city = $city[0]->city;
        $token = env('CITE_TOKEN_WEATHER');
        $url = env('URL_WEATHER');
        $param = [
            'q' => $city,
            'appid' => $token
        ];
        $url_update = $url . http_build_query($param);
        $result = (json_decode(file_get_contents($url_update), JSON_OBJECT_AS_ARRAY));
        $weather = $result['main']['temp'] - 273;
        WeatherModel::addWeather($weather , $id);
        $this->info('Погода в городе '.$city.' '.$weather.' °C');
    }
}
