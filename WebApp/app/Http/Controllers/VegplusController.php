<?php

namespace App\Http\Controllers;

class VegplusController extends Controller
{
    public function index()
    {
        $data["name"] = "白石";
        return view('vegplus', $data);
    }


    public function question()
    {

       return view('vegplus.vegquest');
    }

    public function watermelon()
    {

       return view('vegplus.vegquest.watermelon');
    }

    public function pumpkin()
    {

       return view('vegplus.vegquest.pumpkin');
    }

    public function radish()
    {

       return view('vegplus.vegquest.radish');
    }

    public function eggplant()
    {

       return view('vegplus.vegquest.eggplant');
    }

    public function pimento()
    {

       return view('vegplus.vegquest.pimento');
    }

    public function cauliflower()
    {

       return view('vegplus.vegquest.cauliflower');
    }

    public function tomato()
    {

       return view('vegplus.vegquest.tomato');
    }

    public function kidney()
    {

       return view('vegplus.vegquest.kidney');
    }

    public function mandragora()
    {

       return view('vegplus.vegquest.mandragora');
    }

    public function soybean()
    {

       return view('vegplus.vegquest.soybean');
    }

    public function cucumber()
    {

       return view('vegplus.vegquest.cucumber');
    }

    public function cabbage()
    {

       return view('vegplus.vegquest.cabbage');
    }



}
