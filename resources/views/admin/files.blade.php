@extends('layouts.app1')
@section('content')
<!-- <link rel="stylesheet" href="public/html/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<link rel="stylesheet" type="text/css" href="public/css/style.css">
<link rel="stylesheet" type="text/css" href="public/search/jquery.dropdown.css" >

<link rel="stylesheet" href="public/search/css/jquery.magicsearch.css">
<style>
  /*<!-- Raji -->*/
  
  .select2-container-multi .select2-choices li {
    float: left;
    list-style: none;
}
.select2-container .select2-choice{
  background-image: none;
  border:none;
}
.select2-arrow b{
  width: 0px;
 display: none;
}
.select2-arrow{
  width: 0px !important;
  border-left: 0px solid #aaa !important;
}

div.select2-result-label{
  font-weight:bold;
}

ul.select2-result-sub div.select2-result-label{
  font-weight:100;
}

section div.row.m-t-15 {
    min-height: 250px;
} 
/**select css end */

  </style>
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">File upload Details</h1>
    <h1>
      
  {{ csrf_field() }}
</h1>
  </div> 

  <div class="card  mb-4">
    <div class="card-body">

      <form method="POST" action="files"> 
        @csrf
        <div class="row">
        <div class="col-md-3">
          <div class="form-group ">
            <label for="name">Date</label>
              <input type="date" class="form-control" value="{{$date}}" name="date">
            </div>
          </div>
           <div class="col-md-3">
          <div class="form-group ">
            <label for="name">Status</label>
              <select class="form-control" name="status">
                <option value="ALL"  @if($status=='ALL') selected @endif>ALL</option>
                <option value="PENDING"  @if($status=='PENDING') selected @endif>PENDING</option>
                <option value="COMPLETED" @if($status=='COMPLETED') selected @endif>COMPLETED</option>
              </select>
            </div>
          </div> 
          <div class="col-md-3" style="
          margin-top: 32px;"> 
              <button type="submit" class="btn btn-success  " >Filter
            </div>
        </div>
       </form>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
             
              <th>Slno</th>
              <th>Firm Name</th>
              <th>Attorney Name</th>
              <th>Contact Person</th>
              <th>Email 1 </th>
              <th>Email 2</th>
              <th>Case Name</th> 
              <th>Date</th> 
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($files as $k=>$value)
        <tr class="{{$value->id}}">
          <td>{{ $k+1 }}</td>
          <td>{{ $value->fname }}</td>
          <td>{{$value->attorney}}</td>
          <td>{{$value->unumber}}</td>
          <td>{{$value->email1}}</td>
          <td>{{$value->email2}}</td>
          <td>{{$value->casename}}</td>
          <td>{{Date('d-m-Y',strtotime($value->date))}}</td>
          <td style="text-align: center;"><button type="button" class="btn btn-warning show-modal" data-id="{{ $value->id }}" >
<i class="fa fa-info"></i>
</button></td>
 

</tr>
@endforeach              
</tbody>
      </table>
    </div>
  </div>
</div> 
@endsection
@section('script')
  
<!---------View for the course ------------>
<div id="show" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title-view">File Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" id="view_details">
         
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
 
<!-- Pop up ends  -->
<!-- {{-- 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script> --}} -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


<script type="text/javascript" src="public/html/js/jquery.slimscroll.min.js"></script> 
<script type="text/javascript" src="public/js/select.min.js"></script> 
<script type="text/javascript" src="public/search/js/jquery.magicsearch.js"></script>
 
<script src="public/search/jquery.dropdown.js"></script>
<script type="text/javascript" src="public/search/mock.js"></script>


<script type="text/javascript">

      
  
  // -------------------View ---------------------------
   
  $(document).on('click', '.show-modal', function(event){     
                event.preventDefault(); 
                 var base_url = "{{ url('/') }}/viewfileinfo/"+$(this).attr("data-id");
                  $('#show').modal('show');
                 $.ajax({
                      type    : 'GET',
                      url     : base_url,
                      processData: false,
                      contentType: false,
                      success : function(data) {
                        console.log(data);
                        $("#view_details").html(data);
                      } 
                    }); 

                  });
  
   // -------------Edit----------------------
       
</script>
@endsection