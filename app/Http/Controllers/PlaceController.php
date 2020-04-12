<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    //
    private $places = ['tokyo','yokohama', 'kyoto', 'osaka', 'sapporo', 'nagoya'];

    public function searchPlace(Request $request) {

        $return_place = array();
        $flag = false;

        $input = strtolower($request->input('place'));

        foreach($this->places as $place) {
            if (strpos($place, $input) !== false) {
                $return_places[] = ucfirst($place);
                $flag = true;
            }
        }

        if($flag)
            return response()->json($return_places, 200);
        else
            return;
    }

    public function getWeather(Request $request) {
        
        $input = strtolower($request->input('place'));

        $api_key = (env('OPENWEATHER_API_KEY')) ? env('OPENWEATHER_API_KEY') : '4fb35dcc455cf0996a372859a70560f6';
        $query = [
            'q' => $input,
            'appid' => $api_key
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.openweathermap.org/data/2.5/weather?".http_build_query($query));
        // SSL important
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));



        $weather_data = curl_exec($ch);
        curl_close($ch);

        return $weather_data;
    }

    public function getVenue(Request $request) {
        
        $input = strtolower($request->input('place'));

        $client_id = (env('FOURSQUARE_CLIENT_ID')) ? env('FOURSQUARE_CLIENT_ID') : 'OCDKRV2L50NHZZYHPMQN55LHEYY5G24BG1OUBIHT4LMAY0O4';
        $client_secret = (env('FOURSQUARE_CLIENT_SECRET')) ? env('FOURSQUARE_CLIENT_SECRET') : 'ZP1NMP13KUP1POVFO40XPWIMOCLRJUV3FOFXOOE2N3AKMI2P';
        $query = [
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'v' => date('Ymd'),
            'section' => 'topPicks',
            'near' => $input.',jp'
        ];


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.foursquare.com/v2/venues/explore?".http_build_query($query));
        // SSL important
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));



        $venue_data = curl_exec($ch);
        curl_close($ch);

        return $venue_data;
    }
}
