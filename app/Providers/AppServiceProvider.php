<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\language;
use App\category;
use App\CategoriesTechicalAnalysis;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

// 
// $lang = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();
//
//         @$get_lang = language::where('langcode','=',$lang)->get();
//         @$get_all_langs = language::all();
//          //dd($lang);
//         @$get_lang_id = $get_lang->first()->id;
//         @$get_category_news = category::where('lang_id','=',$get_lang_id)->get();
//         @$get_category_TechicalAnalysis = CategoriesTechicalAnalysis::where('lang_id','=',$get_lang_id)->get();
//
//     \View::composer('website.includes.header', function($view) use($get_category_news) {
//     $view->with('get_category_news',$get_category_news);
//     });
//
//     \View::composer('website.includes.header', function($view) use($get_all_langs) {
//     $view->with('get_all_langs',$get_all_langs);
//     });
 //dd($get_category_news);



    }
}
