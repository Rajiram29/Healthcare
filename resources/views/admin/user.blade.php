@extends('layouts.app1')
@section('content')
        <div class="container-fluid"> 

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User Details</h1>
            <a href="#" data-toggle="modal" id="adduser" data-target="#myModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm  create-modal"><i class="fas fa-plus"></i>ADD USER</a>
          </div>

          <!-- Content Row -->
          
<div class="card  mb-4">
            <div class="card-body">
           <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th style="text-align: center;">Name</th>
                      <th style=" text-align: center;">Email ID</th>
                      <th style=" text-align: center;">Role</th>
                      <th style="width: 50px;">Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                     {{ csrf_field() }}
      <?php  $no=1; ?>
      @foreach ($user as $value)
        <tr class="{{$value->id}}">
          <td>{{ $no++ }}</td>
          <td>{{ $value->name }}</td>
          <td>{{$value->email}}</td>
          <td>{{$value->role}}</td>
          
<td>
  @if($value->status =='0')
<label class="switch">
<input type="checkbox" class="btn-status" id="chk-status" data-id="{{$value->id}}" data-status="{{$value->status}}"checked="">
<span class="slider"></span>
</label>
@else
<label class="switch">
<input type="checkbox" class="btn-status" id="chk-status" data-id="{{$value->id}}" data-status="{{$value->status}}">
<span class="slider"></span>
</label>
@endif
</td>
<td class="action"><div class="dropdown">
<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-cog"></i>
</button>
<div class="dropdown-menu">
{{-- Edit --}}
<a class="dropdown-item edit-modal btn btn-warning btn-sm" href="#" data-id="{{$value->id}}" ><i class="fas fa-edit"></i> Edit</a>
<!-- Delete -->
<a class="dropdown-item delete-modal btn btn-danger btn-sm" href="#" data-id="{{$value->id}}" data-title="{{$value->name}}"><i class="fas fa-trash-alt"></i> Delete</a>
  <!-- view -->
</div>
</div>
</div></td>
</tr>
@endforeach              
              
    </tbody>
  </table>
              </div>

          </div>
          
          
         

        </div>@endsection
@section('script')  

<div id="create" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="userForm" role="form" enctype="multipart/form-data" action="" method="post">

          <input type="hidden" name="edit_id" id="edit_id" value="">
          <div class="form-group ">
            <label for="name">Name :</label>
            
             <input type="text" class="form-control" id="name" name="name"
              placeholder="Your Name Here" required>
              <span class="error e_name hidden"></span>
            </div>

            <div class="form-group ">
            <label for="name">Email ID:</label>
            
             <input type="text" class="form-control" id="email" name="email"
              placeholder="Your Email Here" required>
              <span class="error e_email hidden"></span>
            </div>
             <div class="form-group ">
            <label for="name">Role:</label>
             <select class="form-control" name="role" id="role" >
      <option value="">Select Role</option>
      <option value="Admin">Admin</option>
      <option value="User">User</option>
     </select>
              <span class="error e_role hidden"></span>
            </div>

            <div class="custom-control custom-checkbox" id="Check" >
              <input type="checkbox" class="custom-control-input" name="check" id="customCheck1" value="checked">
              <label class="custom-control-label" for="customCheck1">Do you want to set new password?</label>
              <br> <br>
            </div>
            <div class="form-group " id="showpass">
            <label for="name">Password:</label>
            
             <input type="password" class="form-control" id="password" name="password"
              placeholder="Your Title Here" required>
              <span class="error e_pass hidden"></span>
            </div>

             <div class="form-group " id="cshowpass">
            <label for="name">Confirm Password:</label>
            
             <input type="password" class="form-control" id="cpassword" name="cpassword"
              placeholder="Your Title Here" required>
              <span class="error e_cpass hidden"></span>
            </div>
          
           

             </form>
      </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success btn-icon-split btn-sm" id="btnsubmit">
            <span class="icon text-white-50"><i class="fas fa-check"></i>
            </span> <span class="text"></span>
            </button>
           
          </div>
    </div>
  </div>
</div>








<!---------View for the course ------------>

  <div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title-view"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="state" role="form" enctype="multipart/form-data" action="" method="post">
          <div class="form-group ">
            <label for="name" style="text-decoration: underline;"><b>State:</b></label>
             <p id="ti"></p>
            </div>

            <div class="form-group ">
            <label for="name" style="text-decoration: underline;"><b>Country:</b></label>
             <p id="co"></p>
            </div>
      
        </form>
      </div>
          <div class="modal-footer">
          <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Close
            </button>
           
          </div>
    </div>
  </div>
</div>


  <!-- Course Edit and Delete  -->
  <div id="myModaledit" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
    

     
    </div>
  </div>
</div>


  
  <script type="text/javascript">
  $(document).ready(function() { 
 $('.newbtn').bind("click" , function () {
        $('#pic').click();
 });

 $("#adduser").click(function() {
      $('#Check').hide(); 
      $('#userForm').trigger("reset");
      $('#showpass').show();
      $('#cshowpass').show();
      });
  

//  -----------Click to add course details----------//
 $(document).on('click','.create-modal', function() {
    $('#create').modal('show');
    $('.form-horizontal').show();
    $('.modal-title').text('Add User');
    $('.text').text('Add User');
  });


  $("#userForm").validate({
          rules : {
                password : {
                    minlength : 6
                },
                cpassword : {
                    minlength : 6,
                    equalTo : "#password"
                }
            }
          });

// ---------------Add function--------------//

$("#btnsubmit").click(function() {
        var formData = new FormData($('#userForm')[0]);
if ($('#userForm').valid()) 
  {
         if($("#edit_id").val()=="")
            var base_url ='adduser';
          else
              var base_url = 'updateuser';

    $.ajax({
      type: 'POST',
      url:  base_url,
      data: formData,
      processData: false,
      contentType: false,
      success: function(data){
        if ((data.errors)) {
          $('.error').removeClass('hidden');
          $('.e_name').text(data.errors.name);
          $('.e_email').text(data.errors.email);
          $('.e_role').text(data.errors.role);
          $('.e_pass').text(data.errors.password);
          $('.e_cpass').text(data.errors.cpassword);
          } else {
          console.log(data);
          $('.error').remove();
          swalmsg("success","User details saved successfully");
           setTimeout(function(){ location.reload(); }, 900);
          }
      },

    });
}
    });


// -------------------View ---------------------------




 // -------------Edit----------------------

 jQuery(".edit-modal").click(function(event) {
              event.preventDefault();
              $('#create').modal('show');
              $('#Check').show();
              $('#showpass').hide();
              $('#cshowpass').hide();
              $('.form-horizontal').show();
    $('.modal-title').text('Edit User');
    $('.text').text('Edit User');
              var id= $(this).attr("data-id");
              var base_url = "{{ url('/') }}/viewuser/"+id;
              $.ajax({
                    type    : 'GET',
                    url     : base_url,
                    processData: false,
                    contentType: false,
                    success : function(data) {
                      console.log(data);
                      $("#edit_id").val(data['id']);
                      $("#name").val(data['name']); 
                      $("#email").val(data['email']);
                      $("#role").val(data['role']);
  
                      $('#customCheck1').on('click',checkStatusunlimited);
                        function checkStatusunlimited() {
                          if($('#customCheck1').is(':checked')){
                            $('#showpass').show();
                            $('#cshowpass').show();                         
                     }  
                     else{
                      $('#showpass').hide();
                      $('#cshowpass').hide();
                      
                     }
                    }
                      
                             
                    } 
                  });                

            });


// ------------Delete -----------------//
jQuery(".delete-modal").click(function(event) {
                  event.preventDefault();
                  
                   var base_url = "{{ url('/') }}/deleteuser";
                   var status=$(this).attr("data-status");
                   var id=$(this).attr("data-id");
                    var action_btn=$(this);

                     Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                          }).then((result) => {
                            if (result.value) {
                               $.ajax({
                                    type    : 'POST',
                                    url     : base_url,
                                    data:{id:id}, 
                                    success : function(data) {
                                      console.log(data);
                                      if($.trim(data) =="success") {
                                         Swal.fire(
                                            'Deleted!',
                                            'Your file has been deleted.',
                                            'success'
                                          )
                                        setTimeout(function(){ location.reload(); }, 900);
                                      } else {
                                       
                                      }
                                    } 
                                  }); 

                             
                            }
                          })


                 

                });


// --------------status--------------------------

jQuery(".btn-status").change(function(event) {
              event.preventDefault();
               var base_url = "status";
               var status=$(this).attr("data-status");
               var id=$(this).attr("data-id");
                var action_btn=$(this);
                  $.ajax({
                    type    : 'POST',
                    url     : base_url,
                    data:{status:status,id:id}, 
                    success : function(data) {
                      console.log(data);
                      if($.trim(data) =="0") {
            
                          if(status==0){
                           $('#status').html(data);
                             swaluncheck('User Deactivated successfully!!!');
                             setTimeout(function(){ location.reload(); }, 1800);
                       }else{
                           $('#status').html(data);
                            swalcheck('User Activated successfully!!!');
                            setTimeout(function(){ location.reload(); }, 1800);                 
                       }
                      } else {
                       
                      }
                    } 
                  });  

            });
            });

  </script>
@endsection
