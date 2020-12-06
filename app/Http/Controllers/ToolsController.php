<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    //
    public function chart()
    {

          return view('website.pages-front.Tools.chart');
    }



    public function Calendar()
    {
        //

        return view('website.pages-front.Tools.Calendar');
    }





    public function RiskManagement()
    {

        return view('website.pages-front.Tools.RiskManagement');
    }

}
