<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\story;
use App\language;
use Helper;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd('yousry');
        // return view('website.front.contact.index',compact('users'));

        $lang = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();
        @$get_lang = language::where('langcode','=',$lang)->get();
        @$get_lang_id = $get_lang->first()->id;


        $storys =  story::where('lang_id','=',$get_lang_id)
        ->get();


        //dd($storys);
        return view('website.pages-front.Articles.index',compact('storys'));

    }



    public function Details($id)
    {
        //
        // dd('yousry');
        // return view('website.front.contact.index',compact('users'));
        $storys = story::where('id','=',$id)->get();

        return view('website.pages-front.Articles.Details',compact('storys'));

    }



}
