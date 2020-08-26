<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\digit;
use App\time;
use Validator;
use Illuminate\Support\Facades\Input;
use Response;
use App\http\Requests;


class DigitController extends Controller
{
    //
    public function index(){
      // $data['digit'] = digit::all();
      $data['time']=time::all();
      $data['digit'] = digit::with('timedetails')->orderBy('date','DESC')->get(); 

      return view('admin.digit',$data);
    }

    public function adddigit(Request $request){
      $rules = array(
        'datepicker' => 'required',
        'timing' => 'required',
        'digit' => ['required','max:5','min:5'],
        'draw' => ['required'],
              
      );
    $validator = Validator::make (Input::all(), $rules);
    if ($validator->fails())
    return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

    else {
	  $digit = new digit;
      $digit->time_id = $request->timing;
      $digit->date = date('Y-m-d',strtotime($request->datepicker));
      $digit->digit = $request->digit;
      $digit->draw = $request->draw;
      $digit->save();
      return response()->json($digit);
    }
}

public function viewdigit(Request $request)
    {
        $digits=digit::where('id','=',$request->id)->first();
        $data['date']=date('d-m-Y',strtotime($digits->date));
        $data['digits']=$digits;
         return $data;
    }

     public function editdigit(request $request){
       $rules = array(
        'datepicker' => 'required',
        'timing' => 'required',
        'digit' => ['required','max:5','min:5'],
        'draw' => ['required'],
              
      );
    $validator = Validator::make (Input::all(), $rules);
    if ($validator->fails())
    return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

  else{
        
        $data_update['time_id']=$request->timing; 
        $data_update['date']=date('Y-m-d',strtotime($request->datepicker)); 
        $data_update['digit']=$request->digit; 
        $data_update['draw']=$request->draw; 
     

        $update = digit::where('id',$request->edit_id)->update($data_update);
            if($update)
                return 1;
            else
                return 0;
    }
  }
     public function deletedigit(request $request){
 
  $delete = digit::where('id',$request->id)->delete();
            if($delete)
                return "success";
            else
                return "failed";
}

}
