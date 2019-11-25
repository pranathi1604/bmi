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
      <li><a href="adminlogin.php"> Admin </a></li>
    </ul>
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"> Creating Healthier Lives... </a>
        <ul class="right hide-on-med-and-down">
         <li><a href="notloghome.php"> Logout </a></li>
        </ul>
      </div>
    </nav>
        
         <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center"> DIETICIAN </a>
      <ul class="left hide-on-med-and-down">
        <li><a href="home.php"> Home</a></li>
           <li><a href="bmilogout.php"> BMI Calculator </a></li>
        <li><a href="foodlogout.php"> Food Pyramid </a></li>
        <li><a href="fitlogout.php"> Fitness </a></li>
        </ul>
        
        <ul id="dropdown3" class="dropdown-content">
      <li><a href="menlogout.php"> Men </a></li>
      <li><a href="womlogout.php"> Women </a></li>
    </ul>
        <ul class="right hide-on-med-and-down">
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown3"> Adults <i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
  </nav>   

         <div class="divider"></div>
  <div class="section">
       <div class="row">
      <div class="col s7 push-s5"><span class="flow-text"> 
          <img src="assets/images/sen1.png" width="100%" height="100%"> </span></div>
      <div class="col s5 pull-s7"><span class="flow-text"><h2> Best Rule </h2>
          <p> <h4> Healthy eating begins with you! Giving your body the right nutrients and maintaining a healthy weight can help you stay active and independent. You’ll also spend less time and money at the doctor. This is especially true if you have a chronic condition, such as diabetes or heart disease.</h4></p>
          </span></div>
    </div>
  </div>
    
    <div class="divider"></div>
  <div class="section">
       <div class="row">
      <div class="col s7 push-s5"><span class="flow-text"> <h2> Dos and Dont's </h2>
          <p> <h4> Your metabolism slows down. This happens naturally, but it becomes more pronounced if you don’t get as much exercise as you should. When your metabolism slows, your body doesn't burn as many calories, which means you need to eat less to stay at a healthy weight. As a result, the foods you eat should be as nutrient-rich as possible. 

 </h4></p>
          </span></div>
      <div class="col s5 pull-s7"><span class="flow-text"> 
          <img src="assets/images/sen2.png" width="100%" height="100%"> 
          </span></div>
    </div>
  </div>
    
  

		
                                                                                                          

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
					 Made with ♥ by 
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