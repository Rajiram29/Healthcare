@extends('layouts.app1') 
        <!-- End of Topbar -->
@section('css')
  <style type="text/css">
    label{
      font-weight: 500;
    }
  </style>
@endsection
@section('content')
        <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Time Details</h1>
            <a href="#" data-toggle="modal" data-target="#myModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm  create-modal"><i class="fas fa-plus"></i>ADD TIME</a>
          </div>

          <!-- Content Row -->
          <div class="card  mb-4">
            <div class="card-body">
           <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="100px">No</th>
                      <th>Slot Name</th>
                      <th>Time</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                   <tbody>
                     {{ csrf_field() }}
      <?php  $no=1; ?>
      @foreach ($time as $value)
      
        <tr class="{{$value->id}}">
          <td>{{ $no++ }}</td>
          <td>{{ $value->name }}</td>
          <td>{{ $value->time }}</td>

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
            <label for="name">Slot Name:</label>
            
             <input type="text" class="form-control" id="timing" name="timing"
              placeholder="Enter the Slot Name" required autofocus>
              <span class="error e_timing hidden"></span>
            </div>
            </div>
            </div>
            <!-- From time -->
      <div class="row">
      <div class="col-md-9">
      <div class="form-group pro-styled-select">
      <label> Time:</label>
      <div class="input-group date" id="from_time"  data-target-input="nearest">
      <input type="text" class="form-control datetimepicker-input" data-target="#from_time" name="from_time" id="from_time1" />
       <div class="input-group-append" data-target="#from_time" data-toggle="datetimepicker">
      <div class="input-group-text"><i class="fa fa-clock"></i></div>
        </div>
      </div>
      <span class="error e_from hidden"></span>

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

   <div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title-view"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="addslot" role="form" enctype="multipart/form-data" action="" method="post">
          <div class="form-group ">
            <label for="slot_id" style="text-decoration: underline;"><b>Slot ID:</b></label>
             <p id="sid"></p>
            </div>

            <div class="form-group ">
            <label for="name" style="text-decoration: underline;"><b>Slot Name:</b></label>
             <p id="ti"></p>
            </div>

            <div class="form-group ">
            <label for="from_time" style="text-decoration: underline;"><b>Slot Time:</b></label>
             <p id="frto"></p>
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
@endsection

 @section('script')
   <script type="text/javascript" src="public/js/timepicker.js"></script>
   <script type="text/javascript" src="public/js/timepicker.min.js"></script>

  <script type="text/javascript">
$(document).ready(function() {
  $('#dataTable').DataTable();
});

$(function () {
                $('#to_time').datetimepicker({
                    format: 'LT'
                });
                $('#from_time').datetimepicker({
                    format: 'LT'
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
    $('.modal-title').text('Add Slot');
    $('.text').text('Add Slot');
  });

 $("#btnsubmit").click(function() {
        var formData = new FormData($('#addslot')[0]);

         if($("#edit_id").val()=="")
            var base_url ='addtime';
          else
              var base_url = 'updatetime';

    $.ajax({
      type: 'POST',
      url:  base_url,
      data: formData,
      processData: false,
      contentType: false,
      success: function(data){
        if ((data.errors)) {
          $('.error').removeClass('hidden');
          $('.e_timing').text(data.errors.timing);
          $('.e_from').text(data.errors.from_time);
                  

        } else {
          console.log(data);
          $('.error').remove();
          swalmsg("success","Time details saved successfully");
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
    $('.modal-title').text('Update Time');
    $('#footer_action_button').text(" Update Time");
    $('#footer_action_button').addClass('glyphicon-check');
    $('.actionBtn').addClass('btn-success');
    $('.text').text('Update Time');

               var base_url = "{{ url('/') }}/viewtime/"+$(this).attr("data-id");

               $.ajax({
                    type    : 'GET',
                    url     : base_url,
                    processData: false,
                    contentType: false,
                    success : function(data) {
                      console.log(data);
                      if($.trim(data['id']) !="") {
                        $("#edit_id").val(data['id']);
                        $("#timing").val(data['name']);
                        $("#from_time1").val(data['time']);
                                             
                        } else {
                       
                      }
                    } 
                  }); 

            });


 // ---------Delete-------

 jQuery(".delete-modal").click(function(event) {
                  event.preventDefault();
                  
                   var base_url = "{{ url('/') }}/deletetime";
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
@endsection
