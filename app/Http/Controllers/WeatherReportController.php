<?php
/**
 * Created by PhpStorm.
 * User: luanagoncalves
 * Date: 5/22/16
 * Time: 7:45 PM
 */

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Routing\Controller;

class WeatherReportController extends Controller
{

    public function index(){
        $weatherReport = $this->getWeatherReport();

        return view('weatherreport')->with('weatherReport', $weatherReport);
    }

    private function getWeatherReport() {
        $client = new Client();
        $res = $client->request('GET', 'http://api.wunderground.com/api/82ef01d3bf259e15/geolookup/conditions/q/FL/Deerfield_Beach.json');
        $body = json_decode((string)$res->getBody());
        return $body;
    }

}