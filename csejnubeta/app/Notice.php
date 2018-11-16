<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    //database name
    protected $table = 'notices';
    //primary key
    public $primaryKey = 'id';
    //timestemps
    public $timestamps = true; //default


    public function user ()
    {
        return $this->belongsTo('App\User');
    }
}
