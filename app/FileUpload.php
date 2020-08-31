<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
class FileUpload extends Model
{
     
    protected $table = 'fileupload';

     
 
       public function files(){

       	return $this->hasMany('App\Files','ref_id');
       }

}
