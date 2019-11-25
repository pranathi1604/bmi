<?php include('server.php'); ?>

<!DOCTYPE html>
<html>

	<head>

		<title>
			Diet Monitor
		</title>
        
        <link type="text/css" href="css/snatchbot/sdk/webchat.css" rel="stylesheet" media="screen,projection"/>

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize/materialize.min.css"  media="screen,projection"/>
        
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        
            <script src="js/js/bmi.js"> </script>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="stylesheet" type="text/css" href="css/styles.css">

	</head>

	<body>
        
            <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="register.php"> User </a></li>
      <li><a href="log.php"> Admin </a></li>
    </ul>
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"> Creating Healthier Lives... </a>
        <ul class="right hide-on-med-and-down">
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"> Login <i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </nav>
        
         <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center"> DIETICIAN </a>
      <ul class="left hide-on-med-and-down">
        <li><a href="home.php"> Home</a></li>
        <li><a href="bmi.php"> BMI Calculator </a></li>
        <li><a href="food.php"> Food Pyramid </a></li>
         <li><a href="fit.php"> Fitness </a></li>
        </ul>
        
        <ul id="dropdown3" class="dropdown-content">
      <li><a href="men.php"> Men </a></li>
      <li><a href="wom.php"> Women </a></li>
    </ul>
        <ul class="right hide-on-med-and-down">
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown3"> Adults <i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>


    </div>
  </nav>
        
        <div class="col s6 m7"> 
        <p> <center> <img src="assets/images/bmi.png" height="25%" width="25%">  </center> </p>
        </div>
		
        <p> <b> <h5>  
                Enter your weight in kilograms and your height in centimeters in the form below and press the "Let's see" button 
            </h5>
            </b>
        </p> 

            <FORM NAME="BMI" method=POST>
    <TABLE border=1>
    <TR>
    <TD><DIV ALIGN=CENTER>Your Weight (kg)</DIV></TD>
    <TD><DIV ALIGN=CENTER>Your Height (cm)</DIV></TD>
    <TD><DIV ALIGN=CENTER>Your BMI</DIV></TD>
    <TD><DIV ALIGN=CENTER>My Recommendation </DIV></TD>
    </TR>

    <TR>
    <TD><INPUT TYPE=TEXT NAME=weight  SIZE=10 onFocus="this.form.weight.value=''"></TD>
    <TD><INPUT TYPE=TEXT NAME=height  SIZE=10 onFocus="this.form.height.value=''"></TD>
    <TD><INPUT TYPE=TEXT NAME=bmi     SIZE=8 ></TD>
    <TD><INPUT TYPE=TEXT NAME=my_comment size=35></TD>
    </TABLE>

    <P align="center">
    <INPUT TYPE="button" VALUE="Let's see" onClick="computeform(this.form)">
    <INPUT TYPE="reset"  VALUE="Reset" onClick="ClearForm(this.form)">
    </FORM>
        
      <!-- Dropdown Trigger -->
        <a class='dropdown-trigger btn' href='#' data-target='dropdown4'> Cricket </a>

  <!-- Dropdown Structure -->
  <ul id='dropdown4' class='dropdown-content'>
    <li><a href="40.php"> greater than 40</a></li>
    <li><a href="30.php"> 22 - 40 </a></li>
    <li><a href="22.php"> 21 - 22 </a></li>
    <li><a href="21.php"> 18 - 21 </a></li>
    <li><a href="18.php"> less than 18 </a></li>
  </ul>


        <a class='dropdown-trigger btn' href='#' data-target='dropdown4'> Football </a>

  <!-- Dropdown Structure -->
  <ul id='dropdown4' class='dropdown-content'>
    <li><a href="40.php"> greater than 40</a></li>
    <li><a href="30.php"> 22 - 40 </a></li>
    <li><a href="22.php"> 21 - 22 </a></li>
    <li><a href="21.php"> 18 - 21 </a></li>
    <li><a href="18.php"> less than 18 </a></li>
  </ul>


        <a class='dropdown-trigger btn' href='#' data-target='dropdown4'> Tennis </a>

  <!-- Dropdown Structure -->
  <ul id='dropdown4' class='dropdown-content'>
    <li><a href="40.php"> greater than 40</a></li>
    <li><a href="30.php"> 22 - 40 </a></li>
    <li><a href="22.php"> 21 - 22 </a></li>
    <li><a href="21.php"> 18 - 21 </a></li>
    <li><a href="18.php"> less than 18 </a></li>
  </ul>


    <SCRIPT LANGUAGE="JAVASCRIPT">
    <!-- hide this script tag's contents from old browsers

    function ClearForm(form){

        form.weight.value = "";
        form.height.value = "";
        form.bmi.value = "";
        form.my_comment.value = "";

    }

    function bmi(weight, height) {

              bmindx=weight/eval(height*height);
              return bmindx;
    }

    function checkform(form) {

           if (form.weight.value==null||form.weight.value.length==0 || form.height.value==null||form.height.value.length==0){
                alert("\nPlease complete the form first");
                return false;
           }

           else if (parseFloat(form.height.value) <= 0||
                    parseFloat(form.height.value) >=500||
                    parseFloat(form.weight.value) <= 0||
                    parseFloat(form.weight.value) >=500){
                    alert("\nReally know what you're doing? \nPlease enter values again. \nWeight in kilos and \nheight in cm");
                    ClearForm(form);
                    return false;
           }
           return true;

    }

    function computeform(form) {

           if (checkform(form)) {

           yourbmi=Math.round(bmi(form.weight.value, form.height.value/100));
           form.bmi.value=yourbmi;

           if (yourbmi >40) {
              form.my_comment.value="You are grossly obese, consult your physician!";
           }

           else if (yourbmi >30 && yourbmi <=40) {
              form.my_comment.value="Umm... You are obese, want some liposuction?";
           }

           else if (yourbmi >27 && yourbmi <=30) {
              form.my_comment.value="You are very fat, do something before it's too late";
           }

           else if (yourbmi >22 && yourbmi <=27) {
              form.my_comment.value="You are fat, need dieting and exercise";
           }

           else if (yourbmi >=21 && yourbmi <=22) {
              form.my_comment.value="I envy you. Keep it up!!";
           }

           else if (yourbmi >=18 && yourbmi <21) {
              form.my_comment.value="You are thin, eat more.";
           }

           else if (yourbmi >=16 && yourbmi <18) {
              form.my_comment.value="You are starving. Go Find some food!";
           }

           else if (yourbmi <16) {
              form.my_comment.value="You're grossly undernourished, need hospitalization ";
           }

           }
           return;
    }
     // -- done hiding from old browsers -->
    </SCRIPT>

		<footer class="page-footer"  style="background-image:url('assets/images/back1.png')">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text"> About Us</h5>
						<p class="grey-text text-lighten-4"> We provide the best diet plans to our customers. </p>
                        <p> Our food pyramid provides customers well informative and best choice of food for their good health. </p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Contact Us</h5>
						<ul>
							<li><p class="grey-text text-lighten-3"> Mobile No: </p></li>
                            <li><p class="grey-text text-lighten-3"> Email: </p></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container center">
					 Made with ♥ 
				</div>
			</div>
        </footer>     
       
                        
		<!--JavaScript at end of body for optimized loading-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

		<script type="text/javascript" src="js/materialize/materialize.min.js"></script>
		
		<script type="text/javascript" src="js/js/index.js"></script>
        
        <script type="text/javascript" src="js/snatchbot/sdk/webchat.min.js"></script>
             
               
        <link href="https://snatchbot.me/sdk/webchat.css" rel="stylesheet" type="text/css"><script src="https://snatchbot.me/sdk/webchat.min.js"></script><script> Init('?botID=13890&appID=nEEXx7flHCEFpE5fhZ7m', 600, 600, 'https://dvgpba5hywmpo.cloudfront.net/media/image/1522217117HbKLxCP2WT', 'bubble', '#00AFF0', 90, 90, 62.99999999999999, '', '1', '#FFFFFF'); /* for authentication of its users, you can define your userID (add &userID={login}) */ </script> 

	</body>
</html>