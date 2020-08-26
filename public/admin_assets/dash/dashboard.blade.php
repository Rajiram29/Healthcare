@extends('layouts.app1') 
@section('css')
<link href="public/css/new.css" rel="stylesheet">
<style type="text/css">
    <style type="text/css">
         .dash-btn.active.focus,
         .dash-btn.active:focus,
         .dash-btn.focus,
         .dash-btn.focus:active,
         .dash-btn:active:focus,
         .dash-btn:focus {
         outline: 0 !important;
         outline-offset: 0  !important;
         background-image: none  !important;
         -webkit-box-shadow: none !important;
         box-shadow: none  !important;
         }
         tr:nth-child(even) { 
         background-color: white; 
         } 
         tr:nth-child(odd) { 
         background-color: #f3f2ff; 
         } 
         tr:hover td {
         -moz-box-shadow: 0 4px 2px -3px rgba(0.5, 0.5, 0.5, 0.5) inset;
         -webkit-box-shadow: 0 4px 2px -3px rgba(0, 0, 0, 0.5) inset;
         box-shadow: 0 3px 2px -3px rgba(0.5, 0.5, 0.5, 0.5) inset;
         }
         tr {
         -moz-box-shadow:  0 0 5px #888;
         -webkit-box-shadow:  0 0 5px #888;
         box-shadow:  1px 1px 8px #dadada;
         }
         a:link {
         text-decoration: none;
         }
         th,td{
            padding: 10px 10px 10px 10px;
         }
      </style>
</style>
@endsection

@section('content')
<div class="container-fluid">
                  <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                     <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                  </div>
                  <!-- Content Row -->
                  <div class="row">
                     <!-- TRAINER DASHBOARD -->
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <button type="" class="dash-btn" data-toggle="modal" data-target="#myModal-trainer" style="border: none; background-color: white; text-align: left; ">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Active Trainer </div>
                                       <div class="h5 mb-0 font-weight-bold text-gray-800">{{$trainercount}}</div>
                                    </button>
                                 </div>
                                 <div class="col-auto">
                                    <i class="fas fa-handshake fa-2x text-gray-300"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Pop up Model for Trainer -->
                     <div class="modal fade" id="myModal-trainer" role="dialog">
                        <div class="modal-dialog modal-lg">
                           <!-- Modal content-->
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h4 class="modal-title"> Active Trainers </h4>
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                 <div class="row-dash">
                                    <table width="100%">
                                       <?php $no=0; ?>
                                       @foreach ($trainer as $k=>$value)
                                       <tr>
                                          <td width="20%" align="center">  <a href="{{ url('/') }}/trainer"> <img class="circle" src="{{$value->image}}"></td>
                                          </a>
                                          <td width="20%" align="left" class="tar-name-in-detail"> <a href="{{ url('/') }}/trainer">  {{$value-> name}} </td>
                                          <a>
                                          <a href="{{ url('/') }}/trainer">
                                             <td width="10%">  </td>
                                          </a>
                                          <a href="{{ url('/') }}/trainer">
                                             <td width="20%" align="center" class="tar-in-detail"> {{$value-> trained_in }} </td>
                                          </a>
                                          <td width="20%" align="center"> <a href="{{ url('/') }}/trainer"> <span style='font-size:40px; color:green;'>&#10004; </span> </a></td>
                                       </tr>
                                       </a>
                                       @endforeach 
                                    </table>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- USER DASHBOARD-->
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <button type="" class="dash-btn" data-toggle="modal" data-target="#myModal-user" style="border: none; background-color: white; text-align: left; ">
                                       <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Acive Users</div>
                                       <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                                    </button>
                                 </div>
                                 <div class="col-auto">
                                    <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- pop up for user -->
                     <div class="modal fade" id="myModal-user" role="dialog">
                        <div class="modal-dialog modal-lg">
                           <!-- Modal content-->
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h4 class="modal-title"> Active Trainers </h4>
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                 <div class="row-dash">
                                  
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- TODAY CLASS DASHBOARD  -->
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <button type="" class="dash-btn" data-toggle="modal" data-target="#myModal" style="border: none; background-color: white; text-align: left; ">
                                       <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Today Class</div>
                                       <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                             <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">5</div>
                                          </div>
                                       </div>
                                 </div>
                                 <div class="col-auto">
                                 <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- TOTAL SLOTS DASHBOARD-->
                     <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card border-left-warning shadow h-100 py-2">
                     <div class="card-body">
                     <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                     <button type="" class="dash-btn" data-toggle="modal" data-target="#myModal-slot" style="border: none; background-color: white; text-align: left; ">
                     <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total  Slots</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">{{$slotcount}}</div>
                     </div>
                     </button>
                     <div class="col-auto">
                     <i class="fas fa-chart-pie fa-2x text-gray-300"></i>
                     </div>
                     </div>
                     </div>
                     </div>
                     </div>
                  </div>

                  <div class="modal fade" id="myModal-slot" role="dialog">
                        <div class="modal-dialog modal-lg">
                           <!-- Modal content-->
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h4 class="modal-title">Total Slots</h4>
                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                 <div class="row-dash">
                                    <table width="100%">
                                       <th style="text-align: center;">SLNO</th>
                                       <th style="text-align: center;">SLOT ID</th>
                                       <th style="text-align: center;">SLOT NAME</th>
                                       <th style="text-align: center;">SLOT TIME</th>
                                       <th style="text-align: center;">ACTIONS</th>
                                       <?php $no=1; ?>
                                       @foreach ($slots as $k=>$slot)
                                       <tr style="">
                                          <td width="10%" align="center">  {{ $no++ }} </td>
                                          </a>
                                          <td width="20%" align="center" class="tar-name-in-detail"> <a href="{{ url('/') }}/trainer">  {{$slot->slot_id}} </td>
                                          <a>
                                        
                                          <a href="{{ url('/') }}/slot">
                                             <td width="20%" align="center" class="tar-in-detail" > {{$slot-> timing }} </td>
                                          </a>
                                          <td width="30%" align="center" style="font-weight: 500;"> {{$slot-> from_time }}- {{$slot->to_time }}</td>
                                          <td width="20%" align="center"> <a href="{{ url('/') }}/slot"><i style="font-size:24px; color: #d80505;" class="fa">&#xf044;</i> </a></td>
                                       </tr>
                                      
                                       @endforeach 
                                    </table>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                           </div>
                        </div>
                     </div>
               
@endsection
