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
table tr:nth-child(even) {
    background-color: #eac5c536;
}
table tr td {
color:#0000009c;
}
.checkbox-sample{
  padding:10px 2px 2px 9px;

}
</style>

<div class="gdlr-core-pbf-wrapper " style="padding: 105px 0px 80px 0px;" id="gdlr-core-wrapper-4">
  <div class="gdlr-core-pbf-background-wrap">
      <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{url('/')}}/public/assets/images/samples/sample.png) ;background-size: cover ;background-position: top center ;" data-parallax-speed="0"></div>
  </div>
  <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
      <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
          <div class="gdlr-core-pbf-element">
              <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                  <div class="gdlr-core-title-item-title-wrap ">
                      <h3 class="contact-head-first">Samples<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3>
                      <br>
<!--                       <span>Our expertise is superior in the industry, serving the success of countless Mass Tort, Medical Malpractice and Personal Injury cases. </span>
 -->
                    </div>
              </div>
          </div>
         
</div>
</div>
</div>


<!-- tables -->

<div class="container-fluid contact-form-container" >

  <div class="row">
 
    <div class="col-md-2"></div>
    <div class="col-md-8" style="margin-top: 20px;">
        <h2> Price Lists </h2>

        <!-- <h2> Leave us your info </h2> -->
  <!-- <h4 style="text-align: center;color: #545656!important;">and we will get back to you.</h4> -->
 <table class="table" style="border-spacing:0px;width: 100%">
  <thead class="thead-inverse">
    <tr>
      <th>Services</th>
      <th>Price/Hour</th>
      <th>Additional Services</th>
      <th>Price/Hour</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <!-- <th scope="row">1</th> -->
      <td>Medical Chronology</td>
      <td>$25</td>
      <td>Hyperlinks/Hotlinks</td>
      <td>Free</td>

    </tr>
    <tr>
      <td>Settlement Demand Letter</td>
      <td>$25</td>
      <td>Bookmarks</td>
      <td>$25</td>
  
    </tr>
    <tr>
      <!-- <th scope="row">3</th> -->
      <td>Narrative Summary</td>
      <td>$25</td>
      <td>Med-interpret/Med-A-Word</td>
      <td>$25</td>
     
    </tr>
     <tr>
      <!-- <th scope="row">3</th> -->
      <td>Medical Opinion</td>
      <td>$50</td>
      <td>Missing Records Identification</td>
      <td>Free</td>     
    </tr>

    <tr>
      <td>Deposition Summary</td>
      <td>$25</td>
      <td>PDF Merging & Sorting</td>
      <td>$25</td>
    </tr>

    <tr>
      <td>Billing Summary</td>
      <td>$25</td>
      <td>Jury Questionnaire Summaries</td>
      <td>$25</td>
    </tr>
  </tbody>
</table>
</div>



</div>
<br>

<!-- </div>

<div class="container-fluid contact-form-container"> -->

  <div class="row">
 
    <div class="col-md-2"></div>
    <div class="col-md-8" id="sample-grid-1">
        <h2> Sample Request </h2>
  <!-- <h4 style="text-align: center;color: #545656!important;">and we will get back to you.</h4> -->
 <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Attorney Name <span style='color:red;'>*</span></label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Contact Person</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Contact Person Name">
    </div>
    
  </div>
  <div class="form-group">
    <label for="inputAddress">Firm Name <span style='color:red;'>*</span></label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Firm Name">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Email</label>
    <input type="Email" class="form-control" id="inputAddress2" placeholder="Email">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Samples Desired <span style='color:red;'>*</span></label><br>
       <input type="checkbox"><label for="" class="checkbox-sample"> Medical Chronology </label><br>
       <input type="checkbox"><label for="" class="checkbox-sample"> Expert Medical Opinion </label><br>
       <input type="checkbox"><label for="" class="checkbox-sample"> Narrative Summary</label><br>
       <input type="checkbox"><label for="" class="checkbox-sample"> Settlement Demand Letter</label><br>
       <input type="checkbox"><label for="" class="checkbox-sample"> Billing Summary</label><br>
       <input type="checkbox"><label for="" class="checkbox-sample"> Deposition Summary</label><br>
       <input type="checkbox"><label for="" class="checkbox-sample"> Special Reports</label><br>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Additional Services</label><br>
      <input type="checkbox"><label for="" class="checkbox-sample">Plaintiff Fact Sheets</label><br>
       <input type="checkbox"><label for="" class="checkbox-sample">Med Interpret/Med-A-Word</label><br>
       <input type="checkbox"><label for="" class="checkbox-sample">Bookmarks</label><br>
       <input type="checkbox"><label for="" class="checkbox-sample">Hyperlinks</label><br>
       <input type="checkbox"><label for="" class="checkbox-sample">PDF Sorting & Merging</label><br>
       <input type="checkbox"><label for="" class="checkbox-sample">Jury Questionnaire Summaries</label><br>
       <input type="checkbox"><label for="" class="checkbox-sample">Other Report</label><br>

    
    </div>
    
  </div>
  <!-- <div class="form-row"> -->
   <!--  <div class="form-group">
      <label for="inputCity">Explaination</label>
      <textarea type="text" class="form-control" id="inputCity">Give us a Brief</textarea>
    </div> -->
    <div class="form-group">    
    <input type="submit" class="btn btn-primary" style="border-color: #f0f8ff00; padding: 10px 30px; background-color: #cb4253;" value="Request Sample">
</div>
</form>
</div>



</div>
</div>




@endsection

@section('script')
  
@endsection