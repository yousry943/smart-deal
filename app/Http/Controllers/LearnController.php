<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\learn;
use App\language;
use App\learncategory;

class LearnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($menuCategory)
    {
        //
        $lang = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();
        @$get_lang = language::where('langcode','=',$lang)->get();
        @$get_lang_id = $get_lang->first()->id;


          $learns =  learncategory::where('lang_id','=',$get_lang_id)
          ->where('menuCategory_id','=',$menuCategory)
          ->has('get_learn')->get();

       //dd($learns);
         return view('website.pages-front.Learn.index',compact('learns'));
    }


    public  function  CoursesDetails($id)
    {
      $lang = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();
      @$get_lang = language::where('langcode','=',$lang)->get();
      @$get_lang_id = $get_lang->first()->id;


        $learns =  learncategory::where('lang_id','=',$get_lang_id)->has('get_learn')->get();
        $learn_Details =  learn::where('id','=',$id)->get();
        // dd($learn_Details);

        return view('website.pages-front.Learn.Details',compact('learns','learn_Details'));

    }


}
