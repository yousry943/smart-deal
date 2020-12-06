<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //

    protected $table = 'sliders';

    protected $fillable = ['image','title','description'];

    public function get_language(){
        return $this->belongsTo('App\language','lang_id','id');
    }

}
