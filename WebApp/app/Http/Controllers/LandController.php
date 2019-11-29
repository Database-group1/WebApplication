<?php

namespace App\Http\Controllers;

use App\Models\Land;
use App\Models\land\Vegetable;
use Illuminate\Http\Request;

class LandController extends Controller
{
    public function tomato() 
    {
        

	$vegetables = Vegetable::where('id','9')->get();

	foreach ($vegetables as $v) {
	    $daylight = (int) $v->temp_daylight;;
	    $night = (int) $v->temp_night;
        }

	$high1 = $daylight + 2;
	$high2 = $daylight - 3;
	$low1 = $night + 2;
	$low2 = $night - 3;

	
	//$lands = Land::whereBetween('temp_high', [$high2, $high1])->get();
	//$lands = Land::whereBetween('temp_low', [$low2, $low1])->get();
	$lands = Land::where('temp_low', $night)->get();
	
	return view('land.tomato', ['lands'=>$lands]);

    }


    public function green_papper() {
	$vegetables = Vegetable::where('id', '11')->get();

        foreach ($vegetables as $v) {
            $daylight = (int) $v->temp_daylight;;
            $night = (int) $v->temp_night;
        }

        //$high1 = $daylight + 2;
        $high2 = $daylight - 1;
        $low1 = $night + 5;
        $low2 = $night + 7;

	//$lands = Land::whereBetween('temp_high', [$high2, $high1])->whereBetween('temp_low', [$low2, $low1])->get();
        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->get();
        //$lands = Land::whereBetween('temp_low', [$low2, $low1])->get();
        $lands = Land::where('temp_low', $night)->get();

        return view('land.green_papper', ['lands'=>$lands]);
    }


    public function eggplant() {
	$vegetables = Vegetable::where('id', '10')->get();

        foreach ($vegetables as $v) {
            $daylight = (int) $v->temp_daylight;;
            $night = (int) $v->temp_night;
        }

        $high1 = $daylight + 2;
        $high2 = $daylight - 3;
        $low1 = $night + 2;
        $low2 = $night - 2;

        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->whereBetween('temp_low', [$low2, $low1])->get();
        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->get();
        $lands = Land::whereBetween('temp_low', [$low2, $low1])->get();
        //$lands = Land::where('temp_low', $night)->get();

        return view('land.eggplant', ['lands'=>$lands]);
    }


    public function pumpkin() {
	$vegetables = Vegetable::where('id', '3')->get();
    
        foreach ($vegetables as $v) {
            $daylight = (int) $v->temp_daylight;;
            $night = (int) $v->temp_night;
        }

        $high1 = $daylight + 2;
        $high2 = $daylight - 2;
        //$low1 = $night + 3;
        //$low2 = $night - 3;

        $lands = Land::whereBetween('temp_high', [$high2, $high1])->where('temp_low', '>=', $night)->get();
        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->get();
        //$lands = Land::whereBetween('temp_low', [$low2, $low1])->get();
        //$lands = Land::where('temp_low', $night)->get();

        return view('land.pumpkin', ['lands'=>$lands]);
    }


    public function cucumber() {
	$vegetables = Vegetable::where('id', '6')->get();

        foreach ($vegetables as $v) {
            $daylight = (int) $v->temp_daylight;;
            $night = (int) $v->temp_night;
        }

        $high1 = $daylight + 1;
        $high2 = $daylight - 2;
        $low1 = $night + 1;
        $low2 = $night - 2;

        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->whereBetween('temp_low', [$high2, $high1])->get();
        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->get();
        $lands = Land::whereBetween('temp_low', [$low2, $low1])->get();
        //$lands = Land::where('temp_low', $night)->get();

        return view('land.cucumber', ['lands'=>$lands]);
    }


    public function watermelon() {
	$vegetables = Vegetable::where('id', '7')->get();

        foreach ($vegetables as $v) {
            $daylight = (int) $v->temp_daylight;;
            $night = (int) $v->temp_night;
        }

        $high1 = $daylight + 1;
        $high2 = $daylight - 2;
        $low1 = $night + 2;
        $low2 = $night - 2;

        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->whereBetween('temp_low', [$high2, $high1])->get();
        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->get();
        $lands = Land::whereBetween('temp_low', [$low2, $low1])->get();
        //$lands = Land::where('temp_low', $night)->get();

        return view('land.watermelon', ['lands'=>$lands]);
    }


    public function radish() {
	$vegetables = Vegetable::where('id', '8')->get();

        foreach ($vegetables as $v) {
            $daylight = (int) $v->temp_daylight;;
            $night = (int) $v->temp_night;
        }

        $high1 = $daylight + 2;
        $high2 = $daylight - 3;
        $low1 = $night + 1;
        $low2 = $night - 1;

        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->whereBetween('temp_low', [$high2, $high1])->get();
        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->get();
        $lands = Land::whereBetween('temp_low', [$low2, $low1])->get();
        //$lands = Land::where('temp_low', $night)->get();

        return view('land.radish', ['lands'=>$lands]);
    }


    public function cabbage() {
	$vegetables = Vegetable::where('id', '5')->get();

        foreach ($vegetables as $v) {
            $daylight = (int) $v->temp_daylight;;
            $night = (int) $v->temp_night;
        }

        $high1 = $daylight + 2;
        $high2 = $daylight - 3;
        $low1 = $night + 1;
        $low2 = $night - 2;

        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->whereBetween('temp_low', [$high2, $high1])->get();
        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->get();
        $lands = Land::whereBetween('temp_low', [$low2, $low1])->get();
        //$lands = Land::where('temp_low', $night)->get();

        return view('land.cabbage', ['lands'=>$lands]);
    }


    public function cauliflower() {
	$vegetables = Vegetable::where('id', '4')->get();

        foreach ($vegetables as $v) {
            $daylight = (int) $v->temp_daylight;;
            $night = (int) $v->temp_night;
        }

        $high1 = $daylight + 2;
        $high2 = $daylight - 3;
        //$low1 = $night + 1;
        //$low2 = $night - 1;

        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->where('temp_low', '<=', $night)->get();
        $lands = Land::whereBetween('temp_high', [$high2, $high1])->get();
        //$lands = Land::whereBetween('temp_low', [$low2, $low1])->get();
        //$lands = Land::where('temp_low', $night)->get();

        return view('land.cauliflower', ['lands'=>$lands]);
    }


    public function green_soybean() {
	$vegetables = Vegetable::where('id', '2')->get();

        foreach ($vegetables as $v) {
            $daylight = (int) $v->temp_daylight;;
            $night = (int) $v->temp_night;
        }

        //$high1 = $daylight + 2;
        //$high2 = $daylight - 3;
        $low1 = $night + 1;
        $low2 = $night - 1;

        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->whereBetween('temp_low', [$high2, $high1])->get();
        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->get();
        $lands = Land::whereBetween('temp_low', [$low2, $low1])->get();
        //$lands = Land::where('temp_low', $night)->get();

        return view('land.green_soybean', ['lands'=>$lands]);
    }


    public function kidney_beans() {
	$vegetables = Vegetable::where('id', '1')->get();

        foreach ($vegetables as $v) {
            $daylight = (int) $v->temp_daylight;;
            $night = (int) $v->temp_night;
        }

        //$high1 = $daylight + 2;
        //$high2 = $daylight - 3;
        $low1 = $night + 1;
        $low2 = $night - 2;

        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->whereBetween('temp_low', [$high2, $high1])->get();
        //$lands = Land::whereBetween('temp_high', [$high2, $high1])->get();
        $lands = Land::whereBetween('temp_low', [$low2, $low1])->get();
        //$lands = Land::where('temp_low', $daylight)->get();

        return view('land.kidney_beans', ['lands'=>$lands]);
    }


    
}
