<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Response;
use App\http\Requests;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
      $user = User::where('role','!=','Client')->get();
      return view('admin.user',compact('user'));
    }


    public function create(Request $request){
      
      
     $rules = array(
       'email' => ["required","email","unique:users,email"],  
       'name' => ["required","string","min:2"],
      'role' => ["required"],
     );
   $validator = Validator::make (Input::all(), $rules);
   if ($validator->fails())
   return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

   else {
      $user = new User;
      $user->name=$request->name;
      $user->email=$request->email;
      $user->role=$request->role;
      $user->password=Hash::make($request->password);
      $user->status=0;

        if($user->save())
            return 1;
        else
            return 0;
      
      $user->save();
      return response()->json($user);
}
    }


    public function delete(Request $request)
    {   
            $delete = User::find($request->id)->delete();
            if($delete)
                return "success";
            else
                return "failed";
         
    }
     public function status(Request $request)
    { 

            $update = User::find($request->id);
            $update->status=$request->status==0? 1 : 0; 
              if($update->save())
                return "0";
            else
                return "1";
         
    }
    public function view(Request $request)
    { 
     $data = User::find($request->id); 
     return $data;

         
    }

    public function edit(request $request){ 


    $rules = array(
      'email' => ["required","email","unique:users,email,$request->edit_id,id"],
      'name' => ["required","string","min:2"],
      'role' => ["required"],
    );
  $validator = Validator::make (Input::all(), $rules);
  if ($validator->fails())
  return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

  else {
      $data_update['name']=$request->name; 
      $data_update['email']=$request->email; 
      $data_update['role']=$request->role; 
      if($request->check!='')       
       $data_update['password']=Hash::make($request->password);
      
          $update = User::find($request->edit_id)->update($data_update);
          if($update)
              return 1;
          else
              return 0;
  }
}
      
   
}
