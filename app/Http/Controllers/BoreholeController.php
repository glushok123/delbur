<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBoreholeRequest;
use App\Http\Requests\UpdateBoreholeRequest;
use App\Models\Borehole;
use Illuminate\Support\Facades\Http;

class BoreholeController extends Controller
{
    public function show()
    {
        return view('map.borehole', [

        ]);
    }

    public function json()
    {
        //$data = Http::acceptJson()->get('https://www.aqabur.ru/karta-glubin/mapdata.json?cache=1undefined')->json();
        $boreholes = Borehole::get();

        $data = [
            'type' => 'FeatureCollection',
            'features' => [],
        ];

        foreach($boreholes as $item) {

            $data['features'][] = [
                'type' => 'Feature',
                'id' => $item->id,
                'geometry' => [
                    "type" => "Point",
                    "coordinates" => [$item->y, $item->x],
                ],
                "properties" => [
                    "hintContent" => $item->hintContent,
                    "balloonContentHeader" => $item->balloonContentHeader,
                    "balloonContentBody" => "Глубина скважины: " . $item->depth . '<br>' .
                        'Буровая компания: ' . $item->name_company . '<br>' .
                        'Телефон компании: ' . $item->phone_company . '<br>'
                ]
            ];
        }
        return response()->json($data);
    }
}