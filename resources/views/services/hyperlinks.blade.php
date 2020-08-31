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

ul { list-style: none; } /* Remove default bullets */

.about-list::before {
    content: "\2713"; /* Unicode bullet symbol */
    color: #ff9207;  /* Bullet color */
  
  /* Optional tweaks */
    font-weight: bold;
     padding-right: 10px;
    /*padding-bottom: 10px;*/
}
.about-list{
     font-size: 14.5px !important;
    padding-bottom: 10px !important;

}
.gdlr-core-item-pdlr {
    padding-left: 20px;
    padding-right: 0px !important;

}

input,textarea{
  font-size: 12px !important;  
}



:root {
	/* Base font size */
	font-size: 10px;
}

*,
*::before,
*::after {
	box-sizing: border-box;
}

body {
	min-height: 100vh;
	background-color: #fafafa;
}

.container {
	max-width: 100rem;
	margin: 0 auto;
	padding: 0 2rem 2rem;
}

.heading {
	font-family: "Montserrat", Arial, sans-serif;
	font-size: 4rem;
	font-weight: 500;
	line-height: 1.5;
	text-align: center;
	padding: 3.5rem 0;
	color: #1a1a1a;
}

.heading span {
	display: block;
}

.gallery {
	display: flex;
	flex-wrap: wrap;
	/* Compensate for excess margin on outer gallery flex items */
	margin: -1rem -1rem;
}

.gallery-item {
	/* Minimum width of 24rem and grow to fit available space */
	flex: 1 0 24rem;
	/* Margin value should be half of grid-gap value as margins on flex items don't collapse */
	margin: 1rem;
	/* box-shadow: 0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4); */
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	overflow: hidden;
}

.gallery-image {
	display: block;
	width: 100%;
	height: 100%;
	object-fit: cover;
	transition: transform 400ms ease-out;
}

.gallery-image:hover {
	transform: scale(1.15);
}

/*

The following rule will only run if your browser supports CSS grid.

Remove or comment-out the code block below to see how the browser will fall-back to flexbox styling. 

*/

@supports (display: grid) {
	.gallery {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(24rem, 1fr));
		grid-gap: 2rem;
	}

	.gallery,
	.gallery-item {
		margin: 0;
	}
}

</style>

<!-- head banner -->
 
<div class="gdlr-core-pbf-wrapper " style="padding: 105px 0px 80px 0px;" id="gdlr-core-wrapper-4">
  <div class="gdlr-core-pbf-background-wrap">
      <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{url('/')}}/public/assets/images/all/menu-all.jpg) ;background-size: cover ;background-position: top center ;" data-parallax-speed="0"></div>
  </div>
  <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
      <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
          <div class="gdlr-core-pbf-element">
              <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                  <div class="gdlr-core-title-item-title-wrap ">
                      <h3 class="contact-head-first1" style="text-align:center;float:none;">Hyperlinks/Hotlinks<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3>
                      <br>
<!--                       <span>Our expertise is superior in the industry, serving the success of countless Mass Tort, Medical Malpractice and Personal Injury cases. </span>
 -->
                    </div>
              </div>
          </div>
         
</div>
</div>
<div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
      <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
          <div class="gdlr-core-pbf-element">
              <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                  <div class=" ">
                      <p class="contact-text-sec1" style="text-align:center !important; float:none;">Chronology and source documents will be merged into a single PDF document thereby allowing user to access both simultaneously just by clicking on the page numbers in the chronology.
</p>
                      <!-- <p class="contact-text-sec1"> 1. Settlement Demand Letter </p>
                      <p class="contact-text-sec1"> 2. Under-insured Settlement Demand</p>
                      <p class="contact-text-sec1"> 3. Stowers Settlement Demand </p> -->
                     
                    </div>
              </div>
          </div>
         
</div>
</div>

</div>

<!-- test Gallery -->

<div class="container">

	<h1 class="heading header-clr">Hyperlinks/Hotlinks
</h1>
<div class="row">
<!-- <div class="col-md-3"></div> -->

<div class='col-md-12'>


	<!-- <div class="gallery"> -->
 
		<div class="gallery-item">

			<img class="gallery-image" src="public/assets/images/all/hyperlinks.png" style="height:540px; width:100%;  object-fit: unset;" alt="person writing in a notebook beside by an iPad, laptop, printed photos, spectacles, and a cup of coffee on a saucer">    
      
		</div> 

	<!-- </div> -->

  <!-- <div class="container-gallery" style="padding-top:30px; padding-left:25px;"> 
  <a href="" class="mediz-main-menu-right-button mediz-button-1 mediz-style-round" style="background-color: #ee7e38;border-color: #ee7e38;
    text-align: center; padding: 20px; border-radius: 10px;
">Settlement Demand Letter Sample</a>
  </div> -->
  
</div>
</div>
<br>
<div class="row">

<div class='col-md-12'>

<p>Hyperlinks/Hotlinks service is available only in PDF version. Clicking the references in the hot linked document will take you the corresponding page in the medical records.</p>

<ol class="custom-counter">
    <li>Allows quick navigation to source page from any link on the summary</li>
    <li>Available as an add on feature for PDF based summaries </li>
    <li><b>Free Hyperlinks for your all cases!</b></li>
   </ol>
<!-- <p>The purposes of a demand letter are to establish:</p> -->



</div>


</div>

</div>


<div class="gdlr-core-pbf-wrapper " style="box-shadow: 0 20px 45px rgba(0, 0, 0,0.27); -moz-box-shadow: 0 20px 45px rgba(0, 0, 0,0.27); -webkit-box-shadow: 0 20px 45px rgba(0, 0, 0,0.27); margin-right: auto;margin-bottom: -80px;margin-left: auto;padding: 70px 0px 80px 0px;z-index: 9 ;max-width: 1240px ;border-radius: 5px 5px 5px 5px;-moz-border-radius: 5px 5px 5px 5px;-webkit-border-radius: 5px 5px 5px 5px;  background: linear-gradient(to right, rgb(9 163 173), rgb(4 106 111)); 
    margin-top: 25px;" data-skin="Mediz A2 Counter">
                        <div class="gdlr-core-pbf-background-wrap" style="border-radius: 5px 5px 5px 5px;-moz-border-radius: 5px 5px 5px 5px;-webkit-border-radius: 5px 5px 5px 5px;">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/counter-bg.png) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first" id="gdlr-core-column-38136">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 0px ;">
                                                    <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 39px ;font-weight: 700 ; color: #f3f3f3;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration="" data-counter-start="0" data-counter-end="1520">0</span></div>
                                                    <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 20px ;font-weight: 500 ;text-transform: none ; color:#a6c4ff;">CLIENTS</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-86500">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 0px ;">
                                                    <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 39px ;font-weight: 700 ;color: #f3f3f3;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration="" data-counter-start="0" data-counter-end="25850">0</span><span class="gdlr-core-counter-item-suffix">+</span></div>
                                                    <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 20px ;font-weight: 500 ;text-transform: none ; color:#a6c4ff;" >CASES REVIEWED</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-93525">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 0px ;">
                                                    <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 39px ;font-weight: 700 ; color: #f3f3f3;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration="" data-counter-start="0" data-counter-end="100">0</span>%</div>
                                                    <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 20px ;font-weight: 500 ;text-transform: none ; color:#a6c4ff;">SATISFACTION</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-15">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-counter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" style="padding-bottom: 0px ;">
                                                    <div class="gdlr-core-counter-item-number gdlr-core-skin-title gdlr-core-title-font" style="font-size: 39px ;font-weight: 700 ; color: #f3f3f3;"><span class="gdlr-core-counter-item-count gdlr-core-js" data-duration="" data-counter-start="0" data-counter-end="9">0</span></div>
                                                    <div class="gdlr-core-counter-item-bottom-text gdlr-core-skin-content" style="font-size: 20px ;font-weight: 500 ;text-transform: none ; color:#a6c4ff;">YEARS OF SERVICES</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


<!-- Service Features -->
<div class="gdlr-core-pbf-wrapper " style="padding: 140px 0px 0px 0px;" data-skin="Mediz HP Column SVC">
    <div class="gdlr-core-pbf-background-wrap"></div>
    <div class="gdlr-core-pbf-background-wrap" style="top: 140px ;">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{url('/')}}/public/assets/upload/bg-Our-svc.jpg) ;background-repeat: no-repeat ;background-position: top center ;" data-parallax-speed="0"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-92705">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding-right: 0px;padding-bottom: 55px;padding-left: 0px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
                                  <div class="gdlr-core-title-item-title-wrap ">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 46px ;font-weight: 600 ;text-transform: none ;color: #757272 ; text-align: center;" >Salient features of our medical legal services<span class="gdlr-core-title-item-title-side-border gdlr-core-style-lower" style="border-bottom-width: 4px ;border-color: #757272 ;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;width: 44px ;margin-left: 15px ;"  ></span><span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span>
                                    </h3>
                                  </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
         
            <div class="gdlr-core-pbf-column gdlr-core-column-15 gdlr-core-column-first" id="gdlr-core-column-46663">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px 0px;padding-right: 0px;padding-bottom: 20px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;margin: 0px 0px 0px 0px;">
                                <!-- <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-top: 5px;"><img src="{{url('/')}}/public/assets/images/icons/qua.png" alt="" width="44" height="42" title="Column-icon-4" /></div> -->
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 20px ;">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ; text-align: center;">Medical Chronology</h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                        <!-- <p>Presentation of important facts</p> -->
                                        <ul>
                                          <li class="about-list">Presentation of important facts</li>
                                          <li class="about-list">Easy to understand and concise</li>
                                          <li class="about-list">Saves review time</li>
                                          <li class="about-list">Free Hyperlinks/Hotlinks</li>
                                        </ul>
                                        <!-- <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" target="_self" style="font-size: 16px ;font-weight: 500 ;font-style: normal ;">Learn More<i class="arrow_right" style="font-size: 23px ;"  ></i></a> -->
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-46663">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px 0px;padding-right: 0px;padding-bottom: 20px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;margin: 0px 0px 0px 0px;">
                                <!-- <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-top: 5px;"><img src="{{url('/')}}/public/assets/images/icons/qua.png" alt="" width="44" height="42" title="Column-icon-4" /></div> -->
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 20px ;">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ; text-align: center;">Settlement Demand Letter</h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                        <!-- <p>Presentation of important facts</p> -->
                                        <ul>
                                          <li class="about-list">Crisp presentation</li>
                                          <li class="about-list">ICD & CPT Codes</li>
                                          <li class="about-list">Billing Summary/Medical Expenses</li>
                                          <li class="about-list">Exhibits</li>
                                        </ul>
                                        <!-- <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" target="_self" style="font-size: 16px ;font-weight: 500 ;font-style: normal ;">Learn More<i class="arrow_right" style="font-size: 23px ;"  ></i></a> -->
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  
             <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-46663">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px 0px;padding-right: 0px;padding-bottom: 20px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;margin: 0px 0px 0px 0px;">
                                <!-- <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-top: 5px;"><img src="{{url('/')}}/public/assets/images/icons/qua.png" alt="" width="44" height="42" title="Column-icon-4" /></div> -->
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 20px ;">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ; text-align: center;">Medical Narrative Summary</h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                        <!-- <p>Presentation of important facts</p> -->
                                        <ul>
                                          <li class="about-list">Physicians and medical specialists</li>
                                          <li class="about-list">Medical narrative format</li>
                                          <li class="about-list">Highlight the major events</li>
                                          <li class="about-list">Free Hyperlinks/Hotlinks</li>
                                        </ul>
                                        <!-- <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" target="_self" style="font-size: 16px ;font-weight: 500 ;font-style: normal ;">Learn More<i class="arrow_right" style="font-size: 23px ;"  ></i></a> -->
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  
               <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-46663">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px 0px;padding-right: 0px;padding-bottom: 20px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;margin: 0px 0px 0px 0px;">
                                <!-- <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-top: 5px;"><img src="{{url('/')}}/public/assets/images/icons/qua.png" alt="" width="44" height="42" title="Column-icon-4" /></div> -->
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 20px ;">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ; text-align: center;">Expert Medical Opinion</h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                        <!-- <p>Presentation of important facts</p> -->
                                        <ul>
                                          <li class="about-list">References pertaining to deviation </li>
                                          <li class="about-list">Easy to understand</li>
                                          <li class="about-list">Team of experienced MDs</li>
                                          <li class="about-list">Medical malpractice cases</li>
                                        </ul>
                                        <!-- <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" target="_self" style="font-size: 16px ;font-weight: 500 ;font-style: normal ;">Learn More<i class="arrow_right" style="font-size: 23px ;"  ></i></a> -->
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  
  
               <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-46663">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px 0px;padding-right: 0px;padding-bottom: 20px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;margin: 0px 0px 0px 0px;">
                                <!-- <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-top: 5px;"><img src="{{url('/')}}/public/assets/images/icons/qua.png" alt="" width="44" height="42" title="Column-icon-4" /></div> -->
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 20px ;">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ; text-align: center;">Deposition Summary</h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                        <!-- <p>Presentation of important facts</p> -->
                                        <ul>
                                          <li class="about-list">Concise summaries</li>
                                          <li class="about-list">Page-line</li>
                                          <li class="about-list">Subject-line</li>
                                          <li class="about-list">Desired topic of choice</li>
                                        </ul>
                                        <!-- <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" target="_self" style="font-size: 16px ;font-weight: 500 ;font-style: normal ;">Learn More<i class="arrow_right" style="font-size: 23px ;"  ></i></a> -->
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  
  
             <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-46663">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px 0px;padding-right: 0px;padding-bottom: 20px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;margin: 0px 0px 0px 0px;">
                                <!-- <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-top: 5px;"><img src="{{url('/')}}/public/assets/images/icons/qua.png" alt="" width="44" height="42" title="Column-icon-4" /></div> -->
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 20px ;">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ; text-align: center;">Special Reports 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                        <!-- <p>Presentation of important facts</p> -->
                                        <ul>
                                          <li class="about-list">Treatment Chart</li>
                                          <li class="about-list">Diagnostic Studies Chart</li>
                                          <li class="about-list">Compartive Chart</li>
                                          <li class="about-list">Graphic Timeline</li>
                                        </ul>
                                        <!-- <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" target="_self" style="font-size: 16px ;font-weight: 500 ;font-style: normal ;">Learn More<i class="arrow_right" style="font-size: 23px ;"  ></i></a> -->
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  
               <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-46663">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px 0px;padding-right: 0px;padding-bottom: 20px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;margin: 0px 0px 0px 0px;">
                                <!-- <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-top: 5px;"><img src="{{url('/')}}/public/assets/images/icons/qua.png" alt="" width="44" height="42" title="Column-icon-4" /></div> -->
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 20px ;">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ; text-align: center;">Special Reports 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                        <!-- <p>Presentation of important facts</p> -->
                                        <ul>
                                          <li class="about-list">Pain and Suffering Chart</li>
                                          <li class="about-list">Pain and Medication Graph</li>
                                          <li class="about-list">Billing Summary</li>
                                          <li class="about-list">Exhibit of the bills</li>
                                        </ul>
                                        <!-- <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" target="_self" style="font-size: 16px ;font-weight: 500 ;font-style: normal ;">Learn More<i class="arrow_right" style="font-size: 23px ;"  ></i></a> -->
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  
               <div class="gdlr-core-pbf-column gdlr-core-column-15" id="gdlr-core-column-46663">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px 0px;padding-right: 0px;padding-bottom: 20px;">
                    <div class="gdlr-core-pbf-background-wrap"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-column-service-item gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-column-service-icon-top gdlr-core-no-caption gdlr-core-item-pdlr" style="padding-bottom: 30px;margin: 0px 0px 0px 0px;">
                                <!-- <div class="gdlr-core-column-service-media gdlr-core-media-image" style="margin-top: 5px;"><img src="{{url('/')}}/public/assets/images/icons/qua.png" alt="" width="44" height="42" title="Column-icon-4" /></div> -->
                                <div class="gdlr-core-column-service-content-wrapper">
                                    <div class="gdlr-core-column-service-title-wrap" style="margin-bottom: 20px ;">
                                        <h3 class="gdlr-core-column-service-title gdlr-core-skin-title" style="font-size: 18px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ; text-align: center;">Additional Services</h3></div>
                                    <div class="gdlr-core-column-service-content" style="font-weight: 400 ;text-transform: none ;">
                                        <!-- <p>Presentation of important facts</p> -->
                                        <ul>
                                          <li class="about-list">Med-A-Word/Med-Interpret</li>
                                          <li class="about-list">PDF sorting & Merging</li>
                                          <li class="about-list">Bookmarks</li>
                                          <li class="about-list">Hyperlinks/Hotlinks</li>
                                        </ul>
                                        <!-- <a class="gdlr-core-column-service-read-more gdlr-core-info-font" href="#" target="_self" style="font-size: 16px ;font-weight: 500 ;font-style: normal ;">Learn More<i class="arrow_right" style="font-size: 23px ;"  ></i></a> -->
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  
             
        </div>
    </div>
  </div>
  
<!-- Sample Request -->
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="text-align: center;">
      <!-- <button type="button" class="btn btn-success" id="about-btn">Sample Request >></button> -->
      <a href="" class="sampple-anchor">
      <div class="gdlr-core-pbf-wrapper " style="box-shadow: 0 20px 45px rgba(0, 0, 0,0.27); -moz-box-shadow: 0 20px 45px rgba(0, 0, 0,0.27); -webkit-box-shadow: 0 20px 45px rgba(0, 0, 0,0.27); margin-right: auto;margin-bottom:60px;margin-left: auto;padding: 35px 0px 0px 0px;z-index: 9 ;max-width: 1240px ;border-radius: 5px 5px 5px 5px;-moz-border-radius: 5px 5px 5px 5px;-webkit-border-radius: 5px 5px 5px 5px;  background:  linear-gradient(315deg, #00a794 0%, #00635d 74%); 
      margin-top: 5px;cursor: pointer;" data-skin="Mediz A2 Counter">
                          <div class="gdlr-core-pbf-background-wrap" style="border-radius: 5px 5px 5px 5px;-moz-border-radius: 5px 5px 5px 5px;-webkit-border-radius: 5px 5px 5px 5px;">
                              <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/counter-bg.png) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
                          </div>
                          <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " style="padding-bottom: 26px;">
                              <p id="sample-req">Sample Request <i class="fa fa-angle-double-right" aria-hidden="true"></i></p>
  
                             
                          </div>
                      </div>
                    </a>
    </div>
  </div>
  

  
  
  
  <!-- contact us section -->
  <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{url('/')}}/public/assets/upload/BG-Testimonial.jpg) ;background-size: cover ;background-position: top center;padding: 40px 20px 20px 20px;" data-parallax-speed="0">
  <!-- <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{url('/')}}/public/assets/upload/BG-Testimonial.jpg) ;background-size: cover ;background-position: top center;padding: 40px 20px 20px 20px;" data-parallax-speed="0"> -->
  
  <div class="container">
  
  
  <div class="row">
    <!-- <div class="gdlr-core-pbf-background-wrap"> -->
    <!-- </div> -->
    <!-- <div class="col-md-1"></div> -->
    <div class="col-md-5">
      <h2 class="head-basic"> Feel free to talk to us</h2>
  
      <p style='text-align: justify;'>We provide years of expertise and services to support the legal industry. We have highly trained medical experts who can summarize and evaluate medical records as well as provide cost-effective medical record analysis. Our services are endless.</p>
      <p><b>Email</b>&nbsp;&nbsp;  support@mrrhealthtech.us</p>
      <p><b>Call Now! </b>&nbsp;&nbsp;  +1-408-878-3187</p>
  
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-6 contact-form" style="text-align: center;">
      <h2 class="" style="font-family:sans-serif; color: white;"> Contact us</h2>
      <!-- <button type="button" class="btn btn-success" id="about-btn">Sample Request >></button> -->
       <form>
    <div class="form-row ">
      <div class="form-group col-md-6">
        <!-- <label for="inputPassword4">Full Name</label> -->
        <input type="text" class="form-control" id="inputPassword4" placeholder="Full Name">
      </div>
      <div class="form-group col-md-6">
        <!-- <label for="inputEmail4">Email</label> -->
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
      </div>
      
    </div>
    <div class="form-group">
      <!-- <label for="inputAddress">Phone Number</label> -->
      <input type="text" class="form-control" id="inputAddress" placeholder="Phone">
    </div>
    <div class="form-group">
      <!-- <label for="inputAddress2">Subject</label> -->
      <input type="text" class="form-control" id="inputAddress2" placeholder="Your Subject Here">
    </div>
    <!-- <div class="form-row"> -->
      <div class="form-group">
         <textarea type="text" class="form-control" id="inputCity">Give us a Brief</textarea>
      </div>
      <div class="form-group">    
      <input type="submit" class="btn btn-primary" style="border-color: #f0f8ff00; padding: 10px 30px; width: 100%" value="Contact us">
  </div>
  </form>
    </div>
    </div>
  </div>
  </div>


    

<div class="gdlr-core-pbf-wrapper " style="padding: 15px 0px 10px 0px;" id="gdlr-core-wrapper-4">
  <div class="gdlr-core-pbf-background-wrap">
      <!-- <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url({{url('/')}}/public/assets/upload/BG-Testimonial.jpg) ;background-size: cover ;background-position: top center ;" data-parallax-speed="0"></div> -->
      <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="" data-parallax-speed="0"></div>
  </div>
  <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
      <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
          <div class="gdlr-core-pbf-element">
              <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                  <div class="gdlr-core-title-item-title-wrap ">
                      <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 36px ;font-weight: 500 ;letter-spacing: 0px ;text-transform: none ;color: #251e1ecf ;">What Our Client Say?<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
              </div>
          </div>
          <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-73112">
              <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                  <div class="gdlr-core-pbf-background-wrap"></div>
                  <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js " style="max-width: 850px ;">
                      <div class="gdlr-core-pbf-element">
                          <div class="gdlr-core-testimonial-item gdlr-core-item-pdb clearfix  gdlr-core-testimonial-style-center gdlr-core-item-pdlr">
                              <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="carousel" data-column="1" data-move="1" data-nav="navigation-outer" data-nav-parent="self" data-vcenter-nav="1">
                                  <div class="gdlr-core-flexslider-custom-nav  gdlr-core-style-navigation-outer gdlr-core-center-align">
                                    <!-- <i class=" fa fa-long-arrow-left flex-prev" style="color: #17449e ;font-size: 40px ;left: -150px ;"></i><i class="fa fa-long-arrow-right flex-next" style="color: #17449e ;font-size: 40px ;right: -150px ;"></i> -->
                                    <i class=" fa fa-angle-double-left flex-prev" style="color:rgba(218, 9, 84, 0.41) ;font-size: 40px ;left: -150px ;"></i><i class="fa fa-angle-double-right flex-next" style="color: rgba(218, 9, 84, 0.41) ;font-size: 40px ;right: -150px ;"></i>


                                  </div>
        <ul class="slides">
            <li class="gdlr-core-item-mglr">
                <div class="gdlr-core-testimonial clearfix">
                    <div class="gdlr-core-testimonial-content-wrap">
                        <!-- <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="font-size: 160px ;font-weight: 800 ;margin-top: 70px ;margin-bottom: 0px ;color: #0e969e ;">&#8220;</div> -->
                        <!-- <div class="gdlr-core-testimonial-quote gdlr-core-quote-font gdlr-core-skin-icon" style="font-size: 160px ;font-weight: 800 ;margin-top: 70px ;margin-bottom: 0px ;color: #17449e ;">&#8220;</div> -->
                        <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size:17px ;font-style: italic ;font-weight: 400 ;letter-spacing: 0px ;color: #7a7a7a ;padding-bottom: 20px ;">
                            <p>I am satisfied with the analysis.</p>
                        </div>
                        <img src="public/assets/images/icons/img.png" width="60px" height="50px" style="text-align: center;">

                        <div class="gdlr-core-testimonial-author-wrap clearfix">
                           
                            <div class="gdlr-core-testimonial-author-content">
                                <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color:#e87070cc;font-size: 17px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">&nbsp;DC BASED LAW FIRM</div>
                                <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #a2a2a2 ;font-size: 15px ;font-style: normal ;font-weight: 400 ;">Attorney</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

              <li class="gdlr-core-item-mglr">
                <div class="gdlr-core-testimonial clearfix">
                    <div class="gdlr-core-testimonial-content-wrap">
                        <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size:17px ;font-style: italic ;font-weight: 400 ;letter-spacing: 0px ;color: #7a7a7a ;padding-bottom: 20px ;">
                            <p>MRR has provided outstanding work for us.</p>
                        </div>
                          <img src="public/assets/images/icons/img.png" width="60px" height="50px" style="text-align: center;">

                        <div class="gdlr-core-testimonial-author-wrap clearfix">
                           
                            <div class="gdlr-core-testimonial-author-content">
                                <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #e87070cc ;font-size: 17px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">CO BASED LAW FIRM</div>
                                <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #a2a2a2 ;font-size: 15px ;font-style: normal ;font-weight: 400 ;">Attorney</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="gdlr-core-item-mglr">
                <div class="gdlr-core-testimonial clearfix">
                    <div class="gdlr-core-testimonial-content-wrap">
                        <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size:17px ;font-style: italic ;font-weight: 400 ;letter-spacing: 0px ;color: #7a7a7a ;padding-bottom: 20px ;">
                            <p>I really appreciate all the case support you’ve been giving my office!</p>
                        </div>
                        <img src="public/assets/images/icons/img.png" width="60px" height="50px" style="text-align: center;">

                        <div class="gdlr-core-testimonial-author-wrap clearfix">
                           
                            <div class="gdlr-core-testimonial-author-content">
                                <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #e87070cc ;font-size: 17px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">WA BASED LAW FIRM</div>
                                <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #a2a2a2 ;font-size: 15px ;font-style: normal ;font-weight: 400 ;">Attorney</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
               <li class="gdlr-core-item-mglr">
                <div class="gdlr-core-testimonial clearfix">
                    <div class="gdlr-core-testimonial-content-wrap">
                        <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size:17px ;font-style: italic ;font-weight: 400 ;letter-spacing: 0px ;color: #7a7a7a ;padding-bottom: 20px ;">
                            <p> “Medical Chronology & everything was wonderful. As soon as I obtain more cases, I will send them your way.”</p>
                        </div>
                      <img src="public/assets/images/icons/img.png" width="60px" height="50px" style="text-align: center;">

                        <div class="gdlr-core-testimonial-author-wrap clearfix">
                           
                            <div class="gdlr-core-testimonial-author-content">
                                <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #e87070cc ;font-size: 17px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">TX Based Law Firm</div>
                                <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #a2a2a2 ;font-size: 15px ;font-style: normal ;font-weight: 400 ;">Attorney</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
             <li class="gdlr-core-item-mglr">
                <div class="gdlr-core-testimonial clearfix">
                    <div class="gdlr-core-testimonial-content-wrap">
                        <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size:17px ;font-style: italic ;font-weight: 400 ;letter-spacing: 0px ;color: #7a7a7a ;padding-bottom: 20px ;">
                            <p> “We are pleased with the product. I have about 5 more cases that I am preparing to send to you in the next week or two. ”</p>
                        </div>
                      <img src="public/assets/images/icons/img.png" width="60px" height="50px" style="text-align: center;">
                        <div class="gdlr-core-testimonial-author-wrap clearfix">
                           
                            <div class="gdlr-core-testimonial-author-content">
                                <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #e87070cc ;font-size: 17px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"> SC Based Law Firm </div>
                                <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #a2a2a2 ;font-size: 15px ;font-style: normal ;font-weight: 400 ;">Paralegal</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
                      <li class="gdlr-core-item-mglr">
                <div class="gdlr-core-testimonial clearfix">
                    <div class="gdlr-core-testimonial-content-wrap">
                        <div class="gdlr-core-testimonial-content gdlr-core-info-font gdlr-core-skin-content" style="font-size:17px ;font-style: italic ;font-weight: 400 ;letter-spacing: 0px ;color: #7a7a7a ;padding-bottom: 20px ;">
                            <p> “I printed out the two that were delivered yesterday for my bosses review and he was very pleased with them. We will send you a few more as test runs that are more voluminous to see what the turn around time is but he was overall very happy.”</p>
                        </div>
                     <img src="public/assets/images/icons/img.png" width="60px" height="50px" style="text-align: center;">
                       <div class="gdlr-core-testimonial-author-wrap clearfix">
                        17px                            <div class="gdlr-core-testimonial-author-content">
                                <div class="gdlr-core-testimonial-title gdlr-core-title-font gdlr-core-skin-title" style="color: #e87070cc ;font-size: 17px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;"> CA Based Law Firm </div>
                                <div class="gdlr-core-testimonial-position gdlr-core-info-font gdlr-core-skin-caption" style="color: #a2a2a2 ;font-size: 15px ;font-style: normal ;font-weight: 400 ;">Paralegal</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
           
        
        </ul>
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
