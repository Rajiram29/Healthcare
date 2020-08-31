@extends('layouts.app')

@section('content')
<style type="text/css">
  /*.gdlr-core-skin-title{*/
 /*}*/
 ::placeholder {
  color: red;
}
label{
  font-size: 13px;
}
input{
  font-size: 12px !important;
}
textarea{
  font-size: 12px !important;
}
</style>

 
 
<div class="container-fluid contact-form-container">

  <div class="row">
 
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h2>Login </h2>
  <form method="POST"  action="{{url('/')}}/clientlogin">
  
  @csrf
  <div class="form-group">
    <label for="inputAddress">Email  </label>
    <input type="email" class="form-control" id="email"  name="email" >
  </div>
  <div class="form-group">
    <label for="inputAddress2">Password  </label>
    <input type="password" class="form-control" id="password" name="password"  >
  </div>
  
    <div class="form-group">
    <button type="submit" class="btn btn-primary" style="border-color: #f0f8ff00; padding: 10px 30px;">Login</button>    
     
</div>
</form>
</div>



</div>
</div>

@endsection

@section('script')
  
@endsection
