<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\time;
use Validator;
use Illuminate\Support\Facades\Input;
use Response;
use App\http\Requests;


class TimeController extends Controller
{
    //
    public function index(){
      $time = time::all();
      return view('admin.time',compact('time'));
    }

    public function addtime(Request $request){
      $rules = array(
        'timing' => 'required',
        'from_time' => 'required',
              
      );
    $validator = Validator::make (Input::all(), $rules);
    if ($validator->fails())
    return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

    else {
	  $add_slot = new time;
      $add_slot->name = $request->timing;
      $add_slot->time = $request->from_time;
      $add_slot->save();
      return response()->json($add_slot);
    }
}

public function viewtime(Request $request)
    {
        $data=time::where('id','=',$request->id)->first();
         return $data;
    }

     public function edittime(request $request){
  
        
        $data_update['name']=$request->timing; 
        $data_update['time']=$request->from_time; 
     

        $update = time::where('id',$request->edit_id)->update($data_update);
            if($update)
                return 1;
            else
                return 0;
    }
     public function deletetime(request $request){
 
  $delete = time::where('id',$request->id)->delete();
            if($delete)
                return "success";
            else
                return "failed";
}

}
