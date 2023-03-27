<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Borehole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use \Illuminate\Database\Eloquent\Collection;

class TestController extends Controller
{

    public function test()
    {
        $data = Http::acceptJson()->get('https://www.aqabur.ru/karta-glubin/mapdata.json?cache=1undefined')->json();
        $count = 0;
        foreach($data['features'] as $item) {
            try {
                $count = $count + 1;

                $myArray = explode('<br>', $item['properties']['balloonContent']);

                $borehole = new Borehole();
                $borehole->y = $item['geometry']['coordinates'][0];
                $borehole->x = $item['geometry']['coordinates'][1];

                foreach($myArray as $itemArray) {
                    if (str_contains($itemArray, 'Буровая компания:')) {
                        $borehole->name_company = str_replace('Буровая компания: ', '', $itemArray);
                    }
                    if (str_contains($itemArray, 'Глубина скважин:')) {
                        $borehole->depth =  str_replace('Глубина скважин: ', '', $itemArray);

                    }
                    if (str_contains($itemArray, '+7')) {
                        $borehole->phone_company = $itemArray;
                    }
                }
                $borehole->hintContent =  $item['properties']['hintContent'];
                $borehole->balloonContentHeader =  $item['properties']['balloonContentHeader'];

                $borehole->save();
            }
            catch (exception $e) {
                continue;
            }
        }
    }
}
