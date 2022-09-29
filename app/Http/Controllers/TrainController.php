<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::all();

        $departureTrains = [];

        foreach($trains as $train) {
            if ($train['departure_date'] >= date("Y-m-d")) {
                
                array_push($departureTrains, $train);
                
            }
        }

        return view('train_list', compact('trains', 'departureTrains'));
    }
}
