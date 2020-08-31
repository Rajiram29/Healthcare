<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\FileUpload;
use App\Files;
use Validator;
use Illuminate\Support\Facades\Input;
use Response;
use App\http\Requests;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use File;

class FileuploadsController extends Controller
{
    public function index(Request $request)
    {
    	
    	$file=FileUpload::with('files');
    	if($request->date!="")
    	$file=$file->where('date',$request->date);
    	if($request->status=="PENDING" || $request->status=="COMPLETED" )
    	$file=$file->where('status',$request->status);

       $data['date'] = $request->date ? $request->date : '';  
       $data['status'] = $request->status ? $request->status : '';  
       $data['files'] = $file->get();  
         return view('admin.files',$data);
    }

    

    public function view(Request $request)
    {

     $data['file'] = FileUpload::with('files')->where('id',$request->id)->first();  
         return view('admin.extra.filedetails',$data);
       
    }
 
    
}
