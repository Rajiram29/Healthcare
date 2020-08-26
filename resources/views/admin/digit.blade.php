<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>MedicalRecordsReform</title>
  <link href="public/admin_assets/css/all.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="public/admin_assets/css/admin.css" rel="stylesheet">
  <link href="public/admin_assets/css/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="public/admin_assets/css/calendar.css" rel="stylesheet" type="text/css" />
  <link type="text/css" href="public/sweetalert/sweetalert2.min.css" rel="stylesheet"/> 


</head>

<body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('dashboard')}}">
               MedicalRecordsReform
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
          
            <li class="nav-item @if(Request::segment(1) =='dashboard')
            {{'active'}}
            @endif">
               <a class="nav-link" href="{{url('dashboard')}}">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span></a>
            </li>
          
             
     <li class="nav-item @if(Request::segment(1) =='time')
            {{'active'}}
            @endif">
      <a class="nav-link" href="{{url('time')}}">
      <i class="fas fa-clock"></i>
      <span>Time</span></a>
      </li>

      <li class="nav-item @if(Request::segment(1) =='digits')
            {{'active'}}
            @endif">
      <a class="nav-link" href="{{url('digits')}}">
      <i class="fas fa-credit-card"></i>
      <span>Digits</span></a>
      </li>
      
         </ul>
         <!-- End of Sidebar -->
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
                  </button>
                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">
                     <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                     <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                           <form class="form-inline mr-auto w-100 navbar-search">
                              <div class="input-group">
                                 <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                 <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </li>
                     <!-- Nav Item - Alerts -->
                     <li class="nav-item dropdown no-arrow mx-1">
                       <!--  <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fas fa-bell fa-fw"></i> -->
                           <!-- Counter - Alerts
                           <span class="badge badge-danger badge-counter"></span>
                        </a> -->
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                           <h6 class="dropdown-header">
                              Alerts Center
                           </h6>
                           <a class="dropdown-item d-flex align-items-center" href="#">
                              <div class="mr-3">
                                 <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                 </div>
                              </div>
                              <div>
                                 <div class="small text-gray-500">December 12, 2019</div>
                                 <span class="font-weight-bold">A new monthly report is ready to download!</span>
                              </div>
                           </a>
                           <a class="dropdown-item d-flex align-items-center" href="#">
                              <div class="mr-3">
                                 <div class="icon-circle bg-success">
                                    <i class="fas fa-donate text-white"></i>
                                 </div>
                              </div>
                              <div>
                                 <div class="small text-gray-500">December 7, 2019</div>
                                 $290.29 has been deposited into your account!
                              </div>
                           </a>
                           <a class="dropdown-item d-flex align-items-center" href="#">
                              <div class="mr-3">
                                 <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                 </div>
                              </div>
                              <div>
                                 <div class="small text-gray-500">December 2, 2019</div>
                                 Spending Alert: We've noticed unusually high spending for your account.
                              </div>
                           </a>
                           <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                     </li>
                     <!-- Nav Item - Messages -->
                     <div class="topbar-divider d-none d-sm-block"></div>
                     <!-- Nav Item - User Information -->
                     <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                        <img class="img-profile rounded-circle" src="public/admin_assets/images/admin-profile.png">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                           <a class="dropdown-item" href="{{url('pass')}}">
                           <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                           Change Password
                           </a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                           <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                           Logout
                           </a>
                        </div>
                     </li>
                  </ul>
               </nav>
               <!-- End of Topbar -->
               <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Digits Details</h1>
            <a href="#" data-toggle="modal" data-target="#myModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm  create-modal"><i class="fas fa-plus"></i>ADD DIGITS</a>
          </div>

          <!-- Content Row -->
          <div class="card  mb-4">
            <div class="card-body">
           <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="100px">No</th>

                      <th>Draw No.</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Digit</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                      <tbody>
                     {{ csrf_field() }}
      <?php  $no=1; ?>
      @foreach ($digit as $value)
      <?php $date=date('d-m-Y',strtotime($value->date)); ?>
      
        <tr class="{{$value->id}}">
          <td >{{ $no++ }}</td>
          <td style="text-align: center;">{{ $value->draw }}</td>  
          <td>{{$date}}</td>
          <td> @if($value->timedetails){{ $value->timedetails->name }} {{ $value->timedetails->time }}@endif</td>
          <td>{{ $value->digit }}</td>

<td class="action"><div class="dropdown">
<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-cog"></i>
</button>
<div class="dropdown-menu">
  <!-- view -->
<!-- <a class="dropdown-item show-modal btn btn-info btn-sm" href="#" data-id="{{$value->id}}" data-title="{{$value->name}}" data-body="{{$value->description}}"><i class="fas fa-search"></i> View</a> -->
<!-- edit -->
<a class="dropdown-item edit-modal btn btn-warning btn-sm" href="#" data-id="{{$value->id}}" data-title="{{$value->name}}" ><i class="fas fa-edit"></i> Edit</a>
<!-- Delete -->
<a class="dropdown-item delete-modal btn btn-danger btn-sm" href="#" data-id="{{$value->id}}" data-title="{{$value->name}}"><i class="fas fa-trash-alt"></i> Delete</a>
</div>
</div>
</div></td>
</tr>
@endforeach              
              
    </tbody>


  </table>
              </div>

          </div>
          
          
          </div>

          <!-- Content Row -->
          

      <!-- End of Main Content -->

      <!-- Footer -->
     
<!-- Add Trainer -->
<div id="create" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="addslot" role="form" enctype="multipart/form-data" action="" method="post">

        <input type="hidden" name="edit_id" id="edit_id" value="">

        <!-- SLOT NAME -->
        <div class="row">
      <div class="col-md-9">
          <div class="form-group ">
      <label>Date: </label>
      <input id="datepicker" name="datepicker" value="<?php echo Date('d-m-Y') ?>" />
      <span class="error e_date hidden"></span>

      </div>

            </div>
            </div>
            <!-- From time -->
      <div class="row">
      <div class="col-md-9">
      <div class="form-group pro-styled-select">
      <label>Time :</label>
      <select class="form-control" name="timing" id="timing">
      <option value="">Choose Time</option>
       @foreach($time as $value)
       <option value="{{$value->id}}" >{{$value->name}} - {{$value->time}}</option>
        @endforeach
      </select>
        <span class="error e_timing hidden"></span>     

      </div>
        
      </div>

      </div>

  <div class="row">
      <div class="col-md-9">
     <div class="form-group pro-styled-select">
      <label>Enter Draw:</label>
      <input type="number" name="draw" id="draw" class="form-control" >
              <span class="error e_draw hidden"></span>
      
      </div>

      </div>

      </div>

       <div class="row">
      <div class="col-md-9">
     <div class="form-group pro-styled-select">
      <label>Enter Digit:</label>
      <input type="number" name="digit" id="digit" class="form-control" >
              <span class="error e_digit hidden"></span>
      
      </div>

      </div>

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
  <!-- popup -->


  <!-- View for the trainer -->

 </div>
               <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                     <span>Copyright &copy; SEALOTT</span>
                  </div>
               </div>
            </footer>
            <!-- End of Footer -->
         </div>
         <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                  Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                  </form>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      </div>
     <!-- popup -->

  <script src="public/admin_assets/js/jquery.min.js"></script>
  <!-- <script src="public/admin_assets/js/jquery.validate.js"></script> -->
  <script src="public/admin_assets/js/bootstrap.bundle.min.js"></script>
  <script src="public/admin_assets/js/jquery.easing.min.js"></script>
  <script src="public/admin_assets/js/admin.min.js"></script>
  <script src="public/admin_assets/js/jquery.dataTables.min.js"></script>
  <script src="public/admin_assets/js/dataTables.bootstrap4.min.js"></script>
  <script src="public/admin_assets/js/calendar.js" type="text/javascript"></script>
  <script type="text/javascript" src="public/sweetalert/sweetalert2.min.js"></script>
  
  <script type="text/javascript">
$(document).ready(function() {
  $('#dataTable').DataTable();
});

 
 $('.newbtn').bind("click" , function () {
        $('#pic').click();
 });

 $(document).ready(function () {
    $('#datepicker').datepicker({
      uiLibrary: 'bootstrap',
      format:'dd-mm-yyyy'
    });
});


 $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
 
 $('.newbtn').bind("click" , function () {
        $('#pic').click();
 });


 // Add Trainer-----

 $(document).on('click','.create-modal', function() {
    $('#create').modal('show');
    $('.form-horizontal').show();
    $('.modal-title').text('Add Digit');
    $('.text').text('Add Digit');
  });

 $("#btnsubmit").click(function() {
        var formData = new FormData($('#addslot')[0]);

         if($("#edit_id").val()=="")
            var base_url ='adddigit';
          else
              var base_url = 'updatedigit';

    $.ajax({
      type: 'POST',
      url:  base_url,
      data: formData,
      processData: false,
      contentType: false,
      success: function(data){
        if ((data.errors)) {
          $('.error').removeClass('hidden');
          $('.e_date').text(data.errors.datepicker);
          $('.e_timing').text(data.errors.timing);
          $('.e_digit').text(data.errors.digit);
          $('.e_draw').text(data.errors.draw);
                  

        } else {
          console.log(data);
          $('.error').remove();
          swalmsg("success","Details saved successfully");
           setTimeout(function(){ location.reload(); }, 1800);
          }
      },

    });

    });

 
// ------------edit-----------------
 jQuery(".edit-modal").click(function(event) {

     event.preventDefault();
    $('#create').modal('show');
    $('.form-horizontal').show();
    $('.modal-title').text('Update Digit');
    $('#footer_action_button').text(" Update Digit");
    $('#footer_action_button').addClass('glyphicon-check');
    $('.actionBtn').addClass('btn-success');
    $('.text').text('Update Digit');

               var base_url = "{{ url('/') }}/viewdigit/"+$(this).attr("data-id");

               $.ajax({
                    type    : 'GET',
                    url     : base_url,
                    processData: false,
                    contentType: false,
                    success : function(data) {
                      console.log(data.digits);
                      // console.log(data.digits.id);


                      if($.trim(data.digits.id) !="") {
                        $("#edit_id").val(data.digits.id);
                        $("#timing").val(data.digits.time_id);
                        $("#datepicker").val(data.date);
                        $("#digit").val(data.digits.digit);
                        $("#draw").val(data.digits.draw);
                                             
                        } else {
                       
                      }
                    } 
                  }); 

            });


 // ---------Delete-------

 jQuery(".delete-modal").click(function(event) {
                  event.preventDefault();
                  
                   var base_url = "{{ url('/') }}/deletedigit";
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
                                        setTimeout(function(){ location.reload(); }, 1800);
                                      } else {
                                       
                                      }
                                    } 
                                  }); 

                             
                            }
                          })


                 

                });


    function swalmsg(type,title){
            Swal.fire({
              type: type,
              title: title,
              showConfirmButton: false,
              timer: 1500
            })
      }

  </script>






</body>

</html>
