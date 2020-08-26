@extends('layouts.app1')

@section('content')
 

<style type="text/css">
    .error{
        color:red;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Change Password') }}</div>

                <div class="card-body">
                    <form method="POST" id="password">
                        @csrf


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" autofocus required="">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                               
                                    <span class=" error e_from" role="alert">                                    
                                    </span>
                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-primary btn-submit">
                                    {{ __('Change Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
  <script src="public/admin_assets/js/jquery.validate.js"></script>
 

  <script type="text/javascript">
      $(document).ready(function(){
         $(".btn-submit").click(function() {
            if ($('#password').valid()) 
              {
           var formData = new FormData($('#password')[0]);
            var base_url ='addpass';

    $.ajax({
      type: 'POST',
      url:  base_url,
      data: formData,
      processData: false,
      contentType: false,
      success: function(data){
        if ((data.errors)) {
          $('.error').removeClass('hidden');
          $('.e_timing').text(data.errors.email);
          $('.e_from').text(data.errors.password);
                  

        } else {
          console.log(data);
          if($.trim(data) =="1") {
          $('.error').remove();
          swalmsg("success","Password Changed Successfully");
           setTimeout(function(){ location.reload(); }, 1800);
          }
          }
      },

    });
}
         });
          function swalmsg(type,title){
            Swal.fire({
              type: type,
              title: title,
              showConfirmButton: false,
              timer: 1500
            })
      }
      });
  </script>

@endsection 
