<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class digit extends Model
{

         protected $table = 'digit';
     public function timedetails(){

     	return $this->belongsTo('App\time','time_id');
     }

    protected $fillable=['time','date','digit'];


    function withTime(){
    	return $this->belongsTo('App\time','time_id');
    }
    
}
