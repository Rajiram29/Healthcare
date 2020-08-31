<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FileUpload;
use App\Files;
use App\user; 
use App\MassTort;
use Validator;
use Illuminate\Support\Facades\Input;
use Response;
use App\http\Requests;
use Illuminate\Support\Facades\Hash;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

      
        return view('home');
    }
   
    public function index2()
    {

      
        return view('home-loga');
    }

     public function login()
    {

      
        return view('login');
    }


   public function client_dashboard()
    {

      
        return view('dashboard');
    }

     public function clientlogin(Request $request)
    {

       
        $userdata = array(
        'email'     => Input::get('email'),
        'password'  => Input::get('password'),
        'role'  => "Client"
    );

    // attempt to do the login
    if (Auth::attempt($userdata)) {

       return redirect()->route('client_dashboard'); 

    } else {        
   return redirect()->back()->with('error', 'Invalid email or password');
          

    }
    
 
    }


    public function uploadpage(Request $request)
    { 

        //  return view('upload_files');
         return view('upload');
          
    }

    
    public function contact_us()
    {
         return view('contact_us');
          
    }
 
    public function about_us()
    {
         return view('about_us');
          
    }

         
    public function sample(Request $request)
    {
        

          return view('sample');
    }   

     public function services(Request $request)
    {
        

          return view('services');
    }     

     public function medical_chronology(Request $request)
    {
        

          return view('services.medical_chronology');
    }     
    public function personal_injury(Request $request)
    {
        

          return view('expertise.personal_injury');
    }

 public function monthly(Request $request)
    {
       
          return view('charts');
    }

    public function contact()
    {
         return view('contact');
          
    }

    public function malpractice()
    {
         return view('malpractice');
          
    }

    public function masstort(){
        return view('expertise.masstort');
    }

    public function career(){
        return view('career');
    }
    
    public function medicalnarrative(){
        return view('services.medical-narrative');
    }
    
    public function expertmedical(){
        return view('services.expert-medical');
    }

    public function billingsummary(){
        return view('services.billing-summary');
    }
    public function depositionsummary(){
        return view('services.deposition-summary');
    }

    public function settlementdemand(){
        return view('services.settlement-demand');
    }

    public function bookmarks(){
        return view('services.bookmarks');
    }

    public function hyperlinks(){
        return view('services.hyperlinks');
    }

    public function medaword(){
        return view('services.med-a-word');
    }

    public function missingrecords(){
        return view('services.missing-records');
    }

    public function jury(){
        return view('services.jury');
    }

    public function pdfmerge(){
        return view('services.pdfmerge');
    }

    public function treatment(){
        return view('reports.treatment');
    }

    public function diagnostic(){
        return view('reports.diagnostic');
    }

    public function comparative(){
        return view('reports.comparative');
    }

    public function graphical(){
        return view('reports.graphical');
    }
    public function pain(){
        return view('reports.pain');
    }

    public function medication(){
        return view('reports.medication');
    }

/*Admin funcations*/

 public function dashboard()
    {
         return view('admin.dashboard');
          
    }
     public function pass()
    {
         return view('auth.passwords.reset');
          
    }

public function changepass(Request $request)
    {
      $rules = array(
        'email' => 'required',
        'password' => ['required', 'string', 'min:8', 'confirmed'],
       );
    $validator = Validator::make (Input::all(), $rules);
    if ($validator->fails())
    return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

    else {
        $id=auth::user()->id;
        $data_update['password']= Hash::make($request->password);

        $update = User::where('id',$id)->update($data_update);
            if($update)
                return 1;
            else
                return 0;
    }
}
         
          
   

 
}
