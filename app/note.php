<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    //

    protected $table='notes';
    protected $fillable = [
        'name', 'title','description',
    ];

}
