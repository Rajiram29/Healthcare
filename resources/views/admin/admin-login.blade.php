<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MedicalRecordsReform</title>

  <!-- Custom fonts for this template-->
  
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="public/admin_assets/css/admin.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0 ">
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5 login-cont">
                  <div class="text-center ">
                     <h2>MedicalRecordsReform</h2>
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                    <form method="POST" id="loginFrom" action="" class="user">
                    @csrf 
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required aria-describedby="emailHelp" placeholder="Enter Email Address..." autofocus>
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control form-control-user  @error('password') is-invalid @enderror" id="password"  name="password" required placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>

                    <button type="button" class="btn btn-primary btn-user btn-block login">LOGIN</button>
                  
                    <div class="text-center error" id="errormsg" style="padding: 10px;">
                     
                  </div> 

                    
                     
                  </form>
                  
                 
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


  <script src="public/admin_assets/js/jquery.min.js"></script>
  <script src="public/admin_assets/js/bootstrap.bundle.min.js"></script>
  <script src="public/admin_assets/js/jquery.easing.min.js"></script>
  <script src="public/admin_assets/js/admin.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

  <script type="text/javascript"> 

     jQuery(".login").click(function(event) {
        event.preventDefault();
       if ($('#loginFrom').valid()) {

        var formData = new FormData($('#loginFrom')[0]);
       
              var base_url = "{{ url('/') }}/admin";

                $.ajax({
                  type    : 'POST',
                  url     : base_url,
                  data    : formData,
                  processData: false,
                  contentType: false, 
                  success : function(data) 
                  {
                      console.log(data);
                      if(data==1){
                        $("#errormsg").html('Login credentials not match');
                      }else{
                         
                         location.href="{{ url('/') }}/dashboard";
                         
                      }
                     
                  },
                   error :function( data ) 
                   {
                        if( data.status === 422 ) 
                        {
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function (key, value) 
                            {
                                if($.isPlainObject(value)) 
                                {
                                    $.each(value, function (key, value) 
                                    { 
                                        console.log(key+ " " +value);
                                        $("#loginFrom input#"+key).after('<label class="error" >'+value+'</label>');
                                    });
                                } 
                          });
                        }
                        }
                      });
                }
              });


     $('body').keypress(function(e){
if (e.keyCode == 13)
{
  if ($('#loginFrom').valid()) {
    $('.login').trigger('click');

  }
}
});

   

  </script>

</body>

</html>
