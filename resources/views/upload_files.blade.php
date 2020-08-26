@extends('layouts.app')

@section('content')
<style type="text/css">
  .mediz-body input{
    background-color: #fff;
    box-sizing: border-box;
    border-radius: 2px;
    color: #333;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    display: block;
    float: none;
    font-size: 16px;
    border: 1px solid #ccc;
    padding: 6px 10px;
    height: 38px;
    width: 100%;
    line-height: 1.3;
  }
  .st-form-field.st-style1 {
    padding: 10px;
}
</style>

<div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 130px 0px;">
<div class="gdlr-core-pbf-background-wrap" style="background-color: #f3f3f3 ;"></div>
<div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" data-skin="White Input" id="gdlr-core-column-34122">
            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                <div class="gdlr-core-pbf-background-wrap"></div>
                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 820px ;">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 39px ;letter-spacing: 0px ;text-transform: none ;">Secure File Upload <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div></div>
                    </div>
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                            <div role="form" class="wpcf7" id="wpcf7-f1979-p1964-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
              <form method="POST"  class="st-appointment-form"  style="margin-bottom: 100px;">
              <div id="st-alert1"></div>
              <div class="row">
                <div class="gdlr-core-column-30">
                  <div class="st-form-field st-style1">
                    <label>Firm Name *</label>
                    <input type="text" class="input1" id="fname" name="fname" placeholder="Firm Name" required>
                  </div>
                    <div class="st-form-field st-style1">
                    <label>Attorney Name</label>
                    <input type="text" class="input1" id="attorney" name="attorney" placeholder="Attorney Name"  >
                  </div>
                   <div class="st-form-field st-style1">
                    <label>Contact Person</label>
                    <input type="text" class="input1" id="unumber" name="unumber" placeholder="Contact Person"  >
                  </div>
                   <div class="st-form-field st-style1">
                    <label>Email 1 *</label>
                    <input class="input1" name="email1" type="text" id="email1" placeholder="Email 1">
                     </div>
                      <div class="st-form-field st-style1">
                    <label>Email 2  </label>
                    <input class="input1" name="email2" type="text" id="email2" placeholder="Email 2">
                     </div>
                     <div class="st-form-field st-style1">
                    <label>Case Name</label>
                    <input class="input1" name="casename" type="text" id="casename" placeholder="Case Name">
                     </div>
                     <div class="gdlr-core-column-60">
                  <div class="st-form-field st-style1">
                    <label>Message</label>
                    <textarea cols="30" rows="10" id="umsg" name="umsg" placeholder="Write something here..."></textarea>
                  </div>
                </div>
                </div>
             <!--  <div class="gdlr-core-column-30">
                
                </div> -->
                  
                <div class="gdlr-core-column-30">

                     <label class="st-label">Delivery Speed</label>
                     <div class="form-check">
                      <input type="checkbox" name="" id="normal_delivery" value="Normal Delivery (Approx 2 weeks)"><label for="normal_delivery"> Normal Delivery (Approx 2 weeks)</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" name="" id="quick_delivery" value="Quick Delivery (Approx 1 week)"><label for="quick_delivery"> Quick Delivery (Approx 1 week)</label>
                    </div>
                     <div class="form-check">
                      <input type="checkbox" name="" id="request_quote" value="Request a Quote"><label for="request_quote"> Request a Quote</label>
                    </div>
 
                </div>

                  <div class="gdlr-core-column-30">

                     <label class="st-label">Services Desired</label>
                     <div class="form-check">
                      <input type="checkbox" name="medical_chronology" id="medical_chronology" value="Medical Chronology"><label for="medical_chronology"> Medical Chronology</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" name="expert_medical" id="expert_medical" value="Expert Medical Opinion"><label for="expert_medical"> Expert Medical Opinion</label>
                    </div>
                     <div class="form-check">
                      <input type="checkbox" name="" id="narrative_sum" value="Narrative Summary"><label for="narrative_sum"> Narrative Summary</label>
                    </div>

                       <div class="form-check">
                      <input type="checkbox" name="" id="settlement_letter" value="Settlement Demand Letter"><label for="settlement_letter"> Settlement Demand Letter</label>
                    </div>

                       <div class="form-check">
                      <input type="checkbox" name="" id="billing_summary" value="Billing Summary"><label for="billing_summary"> Billing Summary</label>
                    </div>

                       <div class="form-check">
                      <input type="checkbox" name="" id="deposition_sum" value="Deposition Summary"><label for="deposition_sum"> Deposition Summary</label>
                    </div>
 
                </div>
                 
                  <div class="gdlr-core-column-30">

                     <label class="st-label">Additional Service</label>
                     <div class="form-check">
                      <input type="checkbox" name="medical_chronology" id="medical_chronology" value="Medical Chronology"><label for="medical_chronology"> Hyperlinks / Hotlinks</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" name="expert_medical" id="expert_medical" value="Expert Medical Opinion"><label for="expert_medical"> Bookmarks</label>
                    </div>
                     <div class="form-check">
                      <input type="checkbox" name="" id="narrative_sum" value="Narrative Summary"><label for="narrative_sum"> Provider List</label>
                    </div>

                       <div class="form-check">
                      <input type="checkbox" name="" id="settlement_letter" value="Settlement Demand Letter"><label for="settlement_letter"> Med Interpret/Med-A-Word</label>
                    </div>

                       <div class="form-check">
                      <input type="checkbox" name="" id="billing_summary" value="Billing Summary"><label for="billing_summary"> PDF Sorting & Merging</label>
                    </div>

                       <div class="form-check">
                      <input type="checkbox" name="" id="deposition_sum" value="Deposition Summary"><label for="deposition_sum"> Jury Questionnaire Summaries</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" name="" id="deposition_sum" value="Deposition Summary"><label for="deposition_sum"> Missing Records Identification</label>
                    </div>

                    <div class="form-check">
                      <input type="checkbox" name="" id="deposition_sum" value="Deposition Summary"><label for="deposition_sum"> Medical Transcription</label>
                    </div>

                    <div class="form-check">
                      <input type="checkbox" name="" id="deposition_sum" value="Deposition Summary"><label for="deposition_sum"> Medical Billing</label>
                    </div>

                  <label class="st-label">Special Reports</label>
                     <div class="form-check">
                      <input type="checkbox" name="medical_chronology" id="medical_chronology" value="Medical Chronology"><label for="medical_chronology"> Comparative Chart</label>
                    </div>
                    <div class="form-check">
                      <input type="checkbox" name="expert_medical" id="expert_medical" value="Expert Medical Opinion"><label for="expert_medical"> Treatment Chart</label>
                    </div>
                     <div class="form-check">
                      <input type="checkbox" name="" id="narrative_sum" value="Narrative Summary"><label for="narrative_sum"> Pain & Suffering Chart</label>
                    </div>

                       <div class="form-check">
                      <input type="checkbox" name="" id="settlement_letter" value="Settlement Demand Letter"><label for="settlement_letter"> Pain & Mediation Graph</label>
                    </div>

                       <div class="form-check">
                      <input type="checkbox" name="" id="billing_summary" value="Billing Summary"><label for="billing_summary"> Accident Timeline</label>
                    </div>

                       <div class="form-check">
                      <input type="checkbox" name="" id="deposition_sum" value="Deposition Summary"><label for="deposition_sum"> List of injuries</label>
                    </div>
                      <div class="form-check">
                      <input type="checkbox" name="" id="deposition_sum" value="Deposition Summary"><label for="deposition_sum"> Pre-existing injuries</label>
                    </div>

                      <div class="form-check">
                      <input type="checkbox" name="" id="deposition_sum" value="Deposition Summary"><label for="deposition_sum"> Pain Score Chart</label>
                    </div>
 
                </div>


                <div class="gdlr-core-column-30">

                     
 
                </div>


                <div class="gdlr-core-column-60" style="display: inline-block;">
                  <br>
                  <br>
                  <button class="mediz-main-menu-right-button mediz-button-1 mediz-style-round" type="submit" id="appointment-submit" name="submit">Submit & Upload</button>
                </div>
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
</div>


@endsection

@section('script')
  
@endsection
