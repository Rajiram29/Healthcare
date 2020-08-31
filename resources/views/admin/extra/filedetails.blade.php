    <div class="row">
      <div class="col-md-6"> 
        <div class="form-group ">
            <label style="text-decoration: underline;"><b>Date :</b></label>
            <p id="v_company">{{Date('d-m-Y',strtotime($file->date))}}</p>
          </div>

            <div class="form-group ">
            <label style="text-decoration: underline;"><b>Attorney Name :</b></label>
            <p id="v_jobtitle">{{$file->attorney}}</p>
          </div>

 <div class="form-group ">
            <label style="text-decoration: underline;"><b>Email 1 :</b></label>
            <p id="v_aircraft">{{$file->email1}}</p>
          </div>
 <div class="form-group ">
            <label style="text-decoration: underline;"><b>Case Name :</b></label>
            <p id="v_source">{{$file->casename}}</p>
          </div>


        </div>
      <div class="col-md-6">
          <div class="form-group ">
            <label style="text-decoration: underline;"><b>Firm Name :</b></label>
            <p id="v_company">{{$file->fname}}</p>
          </div>

         <div class="form-group ">
            <label style="text-decoration: underline;"><b>Contact Person :</b></label>
            <p id="v_jobtype">{{$file->unumber}}</p>
          </div>

          <div class="form-group ">
            <label style="text-decoration: underline;"><b>Email 2 :</b></label>
            <p id="v_country">{{$file->email2}}</p>
          </div>

        </div>
</div>
         
  
          <div class="form-group ">
            <label style="text-decoration: underline;"><b>Message :</b></label>
            <p id="v_link">{{$file->umsg}}</p>
          </div>

 <div class="row">
      <div class="col-md-6"> 

          <div class="form-group ">
            <label style="text-decoration: underline;"><b>Delivery Speed :</b></label>
            <p id="v_status"><?php $delivery_speed=explode(",",$file->delivery_speed); ?>
              <ul>
                @foreach($delivery_speed as $del)
                <li>{{$del}}</li>
                @endforeach
              </ul>

            </p>
          </div> 

          <div class="form-group ">
            <label style="text-decoration: underline;"><b>Services Desired :</b></label>
            
              <p id="v_status"><?php $service_desired=explode(",",$file->service_desired); ?>
              <ul>
                @foreach($service_desired as $del)
                <li>{{$del}}</li>
                @endforeach
              </ul>

            </p>
          </div>
</div>
 <div class="col-md-6"> 


           <div class="form-group ">
            <label style="text-decoration: underline;"><b>Additional Service :</b></label>

              <p id="v_status"><?php $additional_service=explode(",",$file->additional_service); ?>
              <ul>
                @foreach($additional_service as $del)
                <li>{{$del}}</li>
                @endforeach
              </ul>

            </p>
          </div>

           <div class="form-group ">
            <label style="text-decoration: underline;"><b>Special Reports:</b></label> 
             <p id="v_status"><?php $special_report=explode(",",$file->special_report); ?>
              <ul>
                @foreach($special_report as $del)
                <li>{{$del}}</li>
                @endforeach
              </ul>

            </p>
          </div>
        </div>
      </div>


  <div class="form-group ">
            <label style="text-decoration: underline;"><b>Files Attached :</b></label> 
              <ol style="line-height: 3em;">
                @foreach($file->files as $fil)
                <li>{{$fil->filename}} 
                  <a href="{{url('/')}}/public/uploads/{{$fil->filename}}" download=""><span style="margin-left: 20px;color: coral;"> <i class="fa fa-download"></i></span></li>
                @endforeach
              </ol>

            
          </div>
 
