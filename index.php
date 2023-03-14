<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $Address=$_POST['Address'];
    $services=$_POST['services'];
    $Vehicles=$_POST['vehicles'];
	$Gender=$_POST['Gender'];
	$Vehicle_number=$_POST['Vehicle_number'];
	$co_passenger=$_POST['co_passenger'];
	$appointment=$_POST['appointment'];
	$Id_number=$_POST['Id_number'];
	$Reason=$_POST['Reason'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $phone=$_POST['phone'];
  $travelingfrom=$_POST['travelingfrom'];
  $Destination=$_POST['Destination'];
  
  
    $aptnumber = mt_rand(100000000, 999999999);
  
    $query=mysqli_query($con,"insert into tblappointment(AptNumber,Name,Email,Address,PhoneNumber,AptDate,AptTime,Services,Vehicles,Gender,Vehicle_number,co_passenger,travelingfrom,Destination,Id_number,Reason) value('$aptnumber','$name','$email','$Address','$phone','$adate','$atime','$services','$Vehicles','$Gender','$Vehicle_number','$co_passenger','$travelingfrom','$Destination','$Id_number','$Reason')");
    if ($query) {
$ret=mysqli_query($con,"select AptNumber from tblappointment where Email='$email' and  PhoneNumber='$phone'");
$result=mysqli_fetch_array($ret);
$_SESSION['aptno']=$result['AptNumber'];
 echo "<script>window.location.href='thank-you.php'</script>";	
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CEPMS||Home Page</title>
        
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <?php include_once('includes/header.php');?>
    <!-- END nav -->

    <section id="home-section" class="hero" style="background-image: url(images/h12.jpg);" data-stellar-background-ratio="0.5">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third align-self-end order-md-last img-fluid" src="images/p2.png" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text mt-5">
		          		<span class="subheading"style="color:yellow;"><b>Welcome to Home Page</b></span>
			            <p class="mb-4"></p>
			            <br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third align-self-end order-md-last img-fluid" src="images/.png" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text mt-5">
			            <h3 class="mb-4"style=color:yellow><b>EPASS</b></h3>

			            <p class="mb-4"style=color:white><b>Pass facility should be used by the people who want to 
						<br> go out of the state or who want to travel within the state. 
						<br>The applicants who are applying for the Emergency Travel Pass should enclose proper supporting details.</b></p>
			         
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>
<br>
<br>
<br>
<br>
<br>
<br>
    <section class="ftco-section ftco-no-pt ftco-booking">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<div class="container-fluid px-0">
    		<div class="row no-gutters d-md-flex justify-content-end">
    			<div class="one-forth d-flex align-items-end">
    				<div class="text">
    					<div class="overlay"></div>
    					<div class="appointment-wrap">
    						<span class="subheading">CEPMS</span>
								<h3 class="mb-2">USER REGISTRATION</h3>
		    				<form action="#" method="post" class="">
			            <div class="row">
			              <div class="col-sm-12">
			                <div class="form-group">
					              <input type="text" class="form-control" id="name" placeholder="Name" name="name" required="true">
					            </div>
			              </div>
			              <div class="col-sm-12">
			                <div class="form-group">
					              <input type="email" class="form-control" id="appointment_email" placeholder="Email" name="email" required="true">
					            </div>
			              </div>  
						<td>
						<textarea name="Address" placeholder="Address" rows="2" cols="2" class="form-control wd-450" required="true"></textarea></td>&nbsp;
				
				            <div class="col-sm-12">
			                <div class="form-group">
					              <div class="select-wrap">
		                      <div class="icon"><span class=""></span></div>
		                      <select name="services" id="services" required="true" class="">
		                      	<option selected disabled>ID Type</option>
								<option value="Aadhar">Aadhar</option>
								<option value="Voter id">Voter id</option>
								<option value="Driving License">Driving License</option>
		                      </select>  
		                    </div>
					            </div>
			              </div>
						   <div class="col-sm-12">
			                <div class="form-group">
					              <input type="number" class="form-control" id="ID no" placeholder="Id_number" name="Id_number" required="Id_number"pattern="[0-9]{12,12}" title="numbers only allowed" required minlength="12" required maxlength="12">
					            </div>
			              </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						  <select name="vehicles" id="vehicles" required="true"><option selected disabled>Vehicles</option>
							  <option value="Car">Car</option>
							  <option value="Bike">Bike</option>
							  <option value="Others">Others</option>
							  </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  <select name="Gender" id="Gender" required="true"><option selected disabled>Gender</option>
							  <option value="male">Male</option>
							  <option value="female">Female</option>
							  <option value="Transgender">Transgender</option>
							  </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  <div class="col-sm-12">
			                <div class="form-group">
					              <input type="text" class="form-control" id="Vehicle_number" placeholder="vehicle number" name="Vehicle_number" required="Vehicle_number">
					            </div>
			              </div>
						    <div class="col-sm-12">
			                <div class="form-group">
					              <input type="text" class="form-control" id="co_passenger" placeholder="co-passenger" name="co_passenger" required="co_passenger">
					            </div>
			              </div>
						  <div class="col-sm-12">
			                <div class="form-group">
					              <div class="select-wrap">
		                      <div class="icon"><span class=""></span></div>
		                      <select name="travelingfrom" id="travelingfrom" required="true"><option selected disabled>Traveling from</option>
								<option value="PALAKKAD">PALAKKAD</option>
								<option value="THRISSUR">THRISSUR</option>
								<option value="KOLLAM">KOLLAM</option>
		                      </select> 
							 <select name="Destination" id="Destination" required="true"><option selected disabled>Destination</option>
							  <option value="PALAKKAD">PALAKKAD</option>
							  <option value="THIRUVANATHAPURAM">THIRUVANATHAPURAM</option>
							  <option value="MALAPURAM">MALAPURAM</option>
							  <option value="KOZHIKODE">KOZHIKODE</option>
							  </select>							  
		                    </div>
					            </div>
			              </div>
						  <div class="col-sm-12">
			                <div class="form-group">
					              <input type="text" class="form-control" id="Reason" placeholder="Reason" name="Reason" required="Reason">
					            </div>
			              </div>
			              <div class="col-sm-12">
			                <div class="form-group">
			                  <input type="text" class="form-control appointment_date" placeholder="Date" name="adate" id='adate' required="true">
			                </div>    
			              </div>
			              <div class="col-sm-12">
			                <div class="form-group">
			                  <input type="text" class="form-control appointment_time" placeholder="Time" name="atime" id='atime' required="true">
			                </div>
			              </div>
			              <div class="col-sm-12">
			                <div class="form-group">
			                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required="true" maxlength="10" pattern="[0-9]+">
			                </div>
			              </div>
				          </div>
				          <div class="form-group">
			              <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary">
			            </div>
			          </form>
		          </div>
						</div>
    			</div>
					<div class="one-third">
						<div class="img" style="background-image: url(images/t1.jpg);">
						</div>
					</div>
    		</div>
    	</div>
    </section>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <p class="mb-4"style=color:red><b>&nbsp;&nbsp; By submitting this form , I confirm that all the information provided and the details uploaded are correct.
	 <br>&nbsp;&nbsp;&nbsp;Any wrong/fabricated information found will lead to legal action.<br>&nbsp;&nbsp;&nbsp; Also confirm the phone number entered is correct and owned by you, further communication will be done to the same.</p>
<p>&nbsp;&nbsp;1. Above mentioned person/s shall produce "valid photo id card" along with this PASS whenever they may be asked to do so by any Govt. Authority and shall comply with<br>&nbsp;&nbsp;&nbsp;&nbsp; all Government orders issued in connection with COVID-19.</p>

<p>&nbsp;&nbsp;2. Those from exempted category as directed by Government of Kerala need not apply for Inter district travel pass.</p>

<p>&nbsp;&nbsp;3. The emergency travel pass is issued as per information sent to us, which if found false or there is any misuse of pass, the applicant /holder will be liable for legal<br>&nbsp;&nbsp;&nbsp;&nbsp;prosecution.</p>

<p>&nbsp;&nbsp;4. The permission given will not have overriding effect on the powers of local/other State Police authorities to give directions as they deem fit in respect of the<br>&nbsp;&nbsp;&nbsp;&nbsp;lockdown.</p>
<br>
<br>	
		<br>
		<h3 style=color:red><center><u>About us</u></center></h3>
		<section class="wthree-row" id="about">
            <div class="row justify-content-center align-items-center no-gutters abbot-main">
                <div class="col-lg-6 p-0 abbot-right">
                    <div class="card">
                        <div class="card-body px-sm-5 py-3 px-4">
                          <!--  <h3 class="stat-title card-title align-self-center">സഹായത്തിനായി സന്നദ്ധ സേവകർ .</h3>-->
                            <span class="w3-line"></span>
                            <p class="card-text align-self-center mt-lg-3 my-3 text-left">
							
							A comprehensive solution for real time surveillance, care and support for people affected/quarantined by Covid 19. This portal is a one stop platform for the public to avail emergency services and information related to Covid 19 and ensures transparency and quality in public services and welfare measures.
</p>
													
								
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <img src="images/h4.jpg" class="img-fluid" alt="" />
                </div>
            </div>
            <div class="row align-items-center no-gutters abbot-grid2">

                <div class="col-lg-6 p-0">
                    <img src="image/h4.jpg" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-6 py-lg-3 px-lg-5 p-sm-5 px-3 py-4 abbot-right">
                  	
						<!--	<p class="card-text align-self-center mt-lg-3 my-3 text-center">
							
							Due to the inflow of persons from affected countries, Kerala state has strengthened the surveillance and control measures against the disease and has gone forward in identifying almost all possible contacts thereby preventing spread of disease and timely health interventions to affected persons. State level, District level and Local Self Government Institution level structures have been set up in the state to ensure coordinated response to COVID 19 management. Interdepartmental coordination at district level to handle issues and spreading of information, education and communication related to COVID 19 is spearheaded by the District Administration.
							</p>-->
					
                </div>
            </div>
        </section>
	    		<section class="wthree-row" id="about">
            <div class="row justify-content-center align-items-center no-gutters abbot-main">
                <div class="col-lg-6 p-0 abbot-right">
                    <div class="card">
                        <div class="card-body px-sm-5 py-3 px-4">
                          <!--  <h3 class="stat-title card-title align-self-center">സഹായത്തിനായി സന്നദ്ധ സേവകർ .</h3>-->
                            <span class="w3-line"></span>
                            <p class="card-text align-self-center mt-lg-3 my-3 text-left">
							
							Due to the inflow of persons from affected countries, Kerala state has strengthened the surveillance and control measures against the disease and has gone forward in identifying almost all possible contacts thereby preventing spread of disease and timely health interventions to affected persons. State level, District level and Local Self Government Institution level structures have been set up in the state to ensure coordinated response to COVID 19 management. Interdepartmental coordination at district level to handle issues and spreading of information, education and communication related to COVID 19 is spearheaded by the District Administration.
</p>
													
								
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <img src="images/work-13.jpg" class="img-fluid" alt="" />
                </div>
            </div>
            <div class="row align-items-center no-gutters abbot-grid2">

                <div class="col-lg-6 p-0">
                    <img src="image/work-13.jpg" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-6 py-lg-3 px-lg-5 p-sm-5 px-3 py-4 abbot-right">
                  	
						<!--	<p class="card-text align-self-center mt-lg-3 my-3 text-center">
							
							Due to the inflow of persons from affected countries, Kerala state has strengthened the surveillance and control measures against the disease and has gone forward in identifying almost all possible contacts thereby preventing spread of disease and timely health interventions to affected persons. State level, District level and Local Self Government Institution level structures have been set up in the state to ensure coordinated response to COVID 19 management. Interdepartmental coordination at district level to handle issues and spreading of information, education and communication related to COVID 19 is spearheaded by the District Administration.
							</p>-->
					
                </div>
            </div>
        </section>
		<section class="wthree-row" id="about">
            <div class="row justify-content-center align-items-center no-gutters abbot-main">
                <div class="col-lg-6 p-0 abbot-right">
                    <div class="card">
                        <div class="card-body px-sm-5 py-3 px-4">
                          <!--  <h3 class="stat-title card-title align-self-center">സഹായത്തിനായി സന്നദ്ധ സേവകർ .</h3>-->
                            <span class="w3-line"></span>
                            <p class="card-text align-self-center mt-lg-3 my-3 text-left">
							
							The COVID-19 pandemic has brought travelling to a stand still. During this lockdown period, people will have to stay in their homes and should not move out unnecessarily. Many Indian states have started the "pass" or "e-pass" system to ensure that only needy people can move out. This page is dedicated to share online curfew pass information for the needy.
</p>
													
								
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <img src="images/work-12.jpg" class="img-fluid" alt="" />
                </div>
            </div>
            <div class="row align-items-center no-gutters abbot-grid2">

                <div class="col-lg-6 p-0">
                    <img src="image/work-12.jpg" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-6 py-lg-3 px-lg-5 p-sm-5 px-3 py-4 abbot-right">
                  	
						<!--	<p class="card-text align-self-center mt-lg-3 my-3 text-center">
							
							Due to the inflow of persons from affected countries, Kerala state has strengthened the surveillance and control measures against the disease and has gone forward in identifying almost all possible contacts thereby preventing spread of disease and timely health interventions to affected persons. State level, District level and Local Self Government Institution level structures have been set up in the state to ensure coordinated response to COVID 19 management. Interdepartmental coordination at district level to handle issues and spreading of information, education and communication related to COVID 19 is spearheaded by the District Administration.
							</p>-->
					
                </div>
            </div>
        </section>	
<h3 class="mb-4"><b><center><u>Videos</u></center></b></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <iframe width="400" height="315" src="https://www.youtube.com/embed/PUn5I8H9Zc0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<iframe width="400" height="315" src="https://www.youtube.com/embed/JQBCjzb67qo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	
	<iframe width="400" height="315" src="https://www.youtube.com/embed/7QOmoJ2RdV8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>		
				
   <?php include_once('includes/footer.php');?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>