<?php

session_start();
require ('scripts/config.php');

	 	  
if (isset($_SESSION['pseudo']))
								{

							 $query = $bdd->query("	SELECT * FROM profile,membres where profile.nomMemb = membres.pseudo and profile.nomMemb='".$_SESSION['pseudo']."'")->fetch(); 



							 }
	$video = $bdd->query("	SELECT * FROM video where categorieVid='AmazingPeople' limit 4 "); 
$video1 = $bdd->query("	SELECT * FROM video where categorieVid='OurTeamPlaylist' limit 4 "); 
$video2 = $bdd->query("	SELECT * FROM video where categorieVid='AfricaHits' limit 4 "); 
$video3 = $bdd->query("	SELECT * FROM video where categorieVid='Comedy' limit 4 "); 
$diffusion = $bdd->query("	SELECT notif FROM notification  ")->fetch(); 
$sponsor = $bdd->query("	SELECT * FROM sponsors where type='physique' or type='morale'  "); 

$Pub1 = $bdd->query("	SELECT * FROM publicite where type='Pub1' ")->fetch(); 
$Pub2 = $bdd->query("	SELECT * FROM publicite where type='Pub2' ")->fetch(); 

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta http-equiv="pragma" content="no-cache" />
			<title>Talentfinders.org</title>
		<!-- Basic Page Needs
 ================================================== -->
  <meta charset="utf-8" />
  <meta name="description" content="Music plateform">
  <meta name="author" content="Stephen OGUNNIYI">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="img/Logo.png">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:image:width" content="100" />
		<meta property="og:image:height" content="100" />
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
	
		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
<script src="vendor/jquery/jquery.js"></script>

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>
		<link rel="stylesheet" href="assets/css/select2.min.css" />

		<!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
	<link href="css/blog.css" rel="stylesheet">
 <!-- Theme JavaScript -->
    <script src="js/grayscale.js"></script>
	
 <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>

	<body >
		 <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
				
                 <a class="navbar-brand page-scroll" href="index.php">
                    <i class="fa fa-video-camera icon-animated-vertical"></i> Talentfinders
                </a>
            
			</div>
			
			
				
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                
				
				<ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    
                    
                    <li >
							
						
							
						</li>
						
						
					
					<li >
                        <a href="about.php"><?php echo $L1 ;?></a>
                    </li>
					
					<li >
                        <?php 
							if (isset($_SESSION['pseudo']))
								{
									echo '<a data-toggle="modal" href="#Lang">'.$L2.'</a>';
								} else
								{
									?><a  href="#test"	data-rel="popover"  data-placement="bottom" 
		data-content=' <p class="center"><button data-toggle="modal" href="#login" class="btn btn-minier btn-primary no-border"><?php echo $L5 ;?></button><br><br>
		<button data-toggle="modal" href="#sign" class="btn btn-minier btn-success no-border"><?php echo $L6 ;?></button>
			  </p>
			
			 '>
       <?php echo $L2 ;?> </a><?php
								}	
								?>
								
    					
                    </li>
					
					<li >
                        <a href="upload.php">
						 <i class="fa fa-upload bigger-120"></i></a>
                    </li>
					
					<li >
                        <a class="  " href="gallery.php">
                    <i class="glyphicon glyphicon-camera bigger-120"></i>
                </a>
                    </li>
					
					
									
				
                </ul>
				
								
									<?php 
							if (isset($_SESSION['pseudo']))
								{
									echo "<a  href='profile.php'>
								<img class='img-circle' src='assets/images/avatars/user/".$query['photo']."' alt='Photo' width='40px'  />	
																
							</a>";
								}else
								{
								echo "<img class='img-circle'  src='assets/images/avatars/avatar.png' alt='Photo' width='40px'  /> ";	
								}
										?>
							
										
				
				
            </div>
            <!-- /.navbar-collapse -->
			
			
        </div>
		<div class="hidden-xs hidden-sm nav-search minimized">
																	<form class="form-search " method="Get" action="search-result.php">
																		<span class="input-icon">
																			<input name="search" type="text" autocomplete="on" class="input-small nav-search-input" placeholder="Search inbox ..." />
																			<i class="ace-icon fa fa-search nav-search-icon"></i>
																		</span>
																	</form>
																</div>
        <!-- /.container -->
		
    </nav>
	

    <!-- Intro Header -->
	
    <header class=" hidden-xs">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
	
      <!-- Indicators -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="3.jpg" alt="First slide">
          <div class="container">
		  <div class="visible-sm"><br><br></div>
            <div class="carousel-caption">
              <p class=" visible-sm" style="color:white; font-size:40px; font-family:Century Gothic;">Talent<font color="red">finders</font></p>
			<p class="hidden-sm" style="color:white; font-size:70px; font-family:Century Gothic;">Talent<font color="red">finders</font> </p>
			               
			 <p style="font-size:20px; font-weight:40px;"><?php 						
							if (isset($_SESSION['pseudo']))
								{
									echo $_SESSION['pseudo'].' , '.$L4 ;
								}
    					?></p>
				<p>
                 
			 <?php 
							if (isset($_SESSION['pseudo']))
								{
									
								}else
								{
									echo '<p><button data-toggle="modal" href="#login" class="btn btn-minier   no-border">'.$L5.'</button>
				<button data-toggle="modal" href="#sign" class="btn btn-minier   no-border">'.$L6.'</button>
			  </p>';}
    					?>		
						
				</p>
        </div>
          </div>
        </div>
        
        
      </div>
      
    </header> 

	<marquee style="color:purple; font-size:18px;" direction="left" >
<?php echo $diffusion['notif'] ;?>

</marquee>
	
<div class="visible-xs"> <br></div>
<div class="container">
<div class="row">
<div class=" visible-sm visible-xs ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-bars bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								
								<div class=" nav-search minimized">
																	<form class="form-search">
																		<span class="input-icon">
																			<input type="text" autocomplete="on" class="input-small nav-search-input" placeholder="Search inbox ..." />
																			<i class="ace-icon fa fa-search nav-search-icon"></i>
																		</span>
																	</form>
																</div>
																
								
								
								<div class="text-xs-center">
								
								
								
      <div class="panel panel-default panel-profile" style=" border:1px solid white;">
	  
	  <ul >
                     
					 <li><a data-toggle="modal" class=" visible-xs " href="#login"><?php echo $L5 ;?></a></li>
					 <li>-</li>
					 <li><a data-toggle="modal" class=" visible-xs " href="#sign"><?php echo $L6 ;?></a></li>
					 <li >
                        <?php 
							if (isset($_SESSION['pseudo']))
								{
									echo '<a data-toggle="modal" href="#Lang">'.$L2.'</a>';
								} else
								{
									?><a  href="#test"	data-rel="popover"  data-placement="bottom" 
		data-content=' <p class="center"><button data-toggle="modal" href="#login" class="btn btn-minier btn-primary no-border"><?php echo $L5 ;?></button><br><br>
		<button data-toggle="modal" href="#sign" class="btn btn-minier btn-success no-border"><?php echo $L6 ;?></button>
			  </p>
			
			 '>
          <?php echo $L2 ;?> </a><?php
								}	
								?>
								
    					
                    </li>
					 
					<li> <?php 
							if (isset($_SESSION['pseudo']))
								{
									echo "<a  href='profile.php'>
								<img class='img-circle' src='assets/images/avatars/user/".$query['photo']."' alt='Photo' width='35px' height='35px' />	
																
							</a>";
								}else
								{
								echo "<img class='img-circle'  src='assets/images/avatars/avatar.png' alt='Photo' width='35px' height='35px' /> ";	
								}
										?>
					 </li>					 
                </ul>
	  
        <div class="panel-heading  text-xs-center " style="background-color:white;font-size:15px; color:gray; border:1px solid white; "><?php echo $L21 ;?></div> 
<ul>
<li>
<a href="upload.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L29 ;?>" class="ic-vertligblanc "><span class="
fa fa-upload "></button></a></li>
<li><a href="competition.php"><button    data-rel="tooltip" data-placement="top" title="<?php echo $L30 ;?>" class="ic-vclaireblanc"><span class="fa
fa-video-camera"></span></button></a>
</li>
<li>
<a href="event.php"><button data-rel="tooltip" data-placement="top" title="<?php echo $L31 ;?>" class=" ic-pinkblanc"><span class="glyphicon
glyphicon-calendar"></span></button></a></li>
</ul>


<ul>
	<li>
<a href="gallery.php"><button data-rel="tooltip" data-placement="top"  title="<?php echo $L32 ;?>" class=" ic-bleublanc"><span class="glyphicon
glyphicon-picture "></span></button></a></li>
<li>
<a href="award.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L33 ;?>" class=" ic-jauneblanc">
<span class="fa fa-trophy"></span></button></a></li>
<li>
<a href="shop.php"><button class=" ic-rougeblanc" data-rel="tooltip" data-placement="top" title="<?php echo $L34 ;?>">
<span class="glyphicon glyphicon-shopping-cart icon-animated-hand-pointer"></span></button>
</a></li>
</ul>




<ul>
<li>
<a href="membre.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L35 ;?> " class="ic-bsombreblanc"><span class="fa
fa-users"></span></button></a></li>
<li>
<a href="sponsor.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L36 ;?>" class=" ic-whatsapblanc"><span class="
fa fa-suitcase"></span></button></a></li>

<li>
<a href="don.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L37 ;?>" class="ic-violblanc"><span class="glyphicon
glyphicon-piggy-bank icon-animated-vertical"></span></button></a></li>
</ul>

<ul>

<li>
<a href="contact.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L25 ;?>" class=" ic-vertblanc">
<span class="glyphicon
glyphicon-phone-alt icon-animated-bell"></span></button></a></li>
<li>
<a href="setting.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L38 ;?>" class=" ic-orangeblanc"><span class="glyphicon
glyphicon-cog"></span></button></a>
</li>
<li>
<a href="scripts/deconnexion.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L39 ;?>" class="ic-dec"><span class="glyphicon
glyphicon-off "></span></button></a></li>
</ul>







        </div></div>
      </div>
								
								
								
								
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->


<div class="row">
	<div class="m-t">

	<div id="mb" class="visible-xs" style=" text-align:center; font-size:20px; ">
	<br>
	<p><?php echo $L100 ;?></p>
	<i style="font-size:60px;" class="fa fa-tv "> </i> <i style="font-size:60px;" class="fa fa-tablet "></i>
	<br><br><?php echo $L101 ;?>
	 	<br><br>
		
		<marquee style="color:red; font-size:18px;" direction="left" >
<?php echo $diffusion['notif'] ;?>

</marquee>
	
	</div>

	
<div class="row">
   
	 
	 <section class="">

 <div class="col-md-9">
     
	

 <div class="panel panel-default panel-profile " style=" border:1px solid white;">
        <div class="panel-heading panel-primary" style="background-color:white;  border:1px solid white; "><h4 style="color:gray;"><?php echo $L22 ;?>
		</h4>
		</div>
        <div class="panel panel-default panel-profile " style=" border:1px solid white;">
          <div class="panel-body text-center" style="background-color:white; border:1px solid white;">
         <?php 
		  while($videoselect=$video1->fetch())
		  {
			
				?>
         
		<div class=" col-xs-6 col-sm-3 col-lg-3 col-md-3">
			
			
		  <a href="video.php?lien=<?php echo $videoselect['lienVid']; ?>"><img class="img-responsive" width="300" src="assets/images/home-img/<?php echo $videoselect['imageVid']; ?>"  /></a>

<h5 class="panel-title"><?php echo $videoselect['nomVid']; ?></h5>
			<br>

		  </div>
		  
		  
		  <?php 
		  }
		  
		   ?>

        </div></div>
    </div>
	
	 <div class="panel panel-default panel-profile " style=" border:1px solid white;">
        <div class="panel-heading panel-primary" style="background-color:white;  border:1px solid white; "><h4 style="color:gray;"><?php echo $L23 ;?>
		</h4>
		</div>
        <div class="panel panel-default panel-profile " style=" border:1px solid white;">
          <div class="panel-body text-center" style="background-color:white; border:1px solid white;">
 <?php 
		  while($videoselect=$video2->fetch())
		  {
			
				?>
         
		<div class=" col-xs-6 col-sm-3 col-lg-3 col-md-3">
			
			
		  <a href="video.php?lien=<?php echo $videoselect['lienVid']; ?>"><img class="img-responsive" width="300" src="assets/images/home-img/<?php echo $videoselect['imageVid']; ?>"  /></a>

<h5 class="panel-title"><?php echo $videoselect['nomVid']; ?></h5>
			<br>

		  </div>
		  
		  
		  <?php 
		  }
		  
		   ?>
		   </div>
    </div></div>
	<div class="panel panel-default panel-profile " style=" border:1px solid white;">
        <div class="panel-heading panel-primary" style="background-color:white;  border:1px solid white; "><h4 style="color:gray;"><?php echo $L20 ;?>
		</h4>
		</div>
        <div class="panel panel-default panel-profile " style=" border:1px solid white;">
          <div class="panel-body text-center" style="background-color:white; border:1px solid white;">
         
		   <?php 
		  while($videoselect=$video->fetch())
		  {
			
				?>
         
		<div class=" col-xs-6 col-sm-3 col-lg-3 col-md-3">
			
			
		  <a href="video.php?lien=<?php echo $videoselect['lienVid']; ?>"><img class="img-responsive" width="300" src="assets/images/home-img/<?php echo $videoselect['imageVid']; ?>"  /></a>

<h5 class="panel-title"><?php echo $videoselect['nomVid']; ?></h5>
			<br>

		  </div>
		  
		  
		  <?php 
		  }
		  
		   ?>
        </div></div>
    </div>
	

<div class="panel panel-default panel-profile " style=" border:1px solid white;">
        <div class="panel-heading panel-primary" style="background-color:white;  border:1px solid white; "><h4 style="color:gray;"><?php echo $L24 ;?>
		</h4>
		</div>
        <div class="panel panel-default panel-profile " style=" border:1px solid white;">
          <div class="panel-body text-center" style="background-color:white; border:1px solid white;">
          <?php 
		  while($videoselect=$video3->fetch())
		  {
			
				?>
         
		<div class=" col-xs-6 col-sm-3 col-lg-3 col-md-3">
			
			
		  <a href="video.php?lien=<?php echo $videoselect['lienVid']; ?>"><img class="img-responsive" width="300" src="assets/images/home-img/<?php echo $videoselect['imageVid']; ?>"  /></a>

<h5 class="panel-title"><?php echo $videoselect['nomVid']; ?></h5>
			<br>

		  </div>
		  
		  
		  <?php 
		  }
		  
		   ?>

        </div></div>
    </div>
		

	
</section>


 <section class="hidden-sm hidden-xs">

 <div class="col-sm-4 col-md-3 col-lg-3 text-xs-center">
      <div class="panel panel-default panel-profile" style=" border:1px solid white;">
               <div class="panel-heading  text-xs-center " style="background-color:white;font-size:15px; color:gray; border:1px solid white; "><?php echo $L21 ;?></div> 
<ul>
<li>
<a href="upload.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L29 ;?>" class="ic-vertligblanc "><span class="
fa fa-upload "></button></a></li>
<li><a href="competition.php"><button    data-rel="tooltip" data-placement="top" title="<?php echo $L30 ;?>" class="ic-vclaireblanc"><span class="fa
fa-video-camera"></span></button></a>
</li>
<li>
<a href="event.php"><button data-rel="tooltip" data-placement="top" title="<?php echo $L31 ;?>" class=" ic-pinkblanc"><span class="glyphicon
glyphicon-calendar"></span></button></a></li>
</ul>


<ul>
	<li>
<a href="gallery.php"><button data-rel="tooltip" data-placement="top"  title="<?php echo $L32 ;?>" class=" ic-bleublanc"><span class="glyphicon
glyphicon-picture "></span></button></a></li>
<li>
<a href="award.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L33 ;?>" class=" ic-jauneblanc">
<span class="fa fa-trophy"></span></button></a></li>
<li>
<a href="shop.php"><button class=" ic-rougeblanc" data-rel="tooltip" data-placement="top" title="<?php echo $L34 ;?>">
<span class="glyphicon glyphicon-shopping-cart icon-animated-hand-pointer"></span></button>
</a></li>
</ul>




<ul>
<li>
<a href="membre.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L35 ;?> " class="ic-bsombreblanc"><span class="fa
fa-users"></span></button></a></li>
<li>
<a href="sponsor.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L36 ;?>" class=" ic-whatsapblanc"><span class="
fa fa-suitcase"></span></button></a></li>

<li>
<a href="don.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L37 ;?>" class="ic-violblanc"><span class="glyphicon
glyphicon-piggy-bank icon-animated-vertical"></span></button></a></li>
</ul>

<ul>

<li>
<a href="contact.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L25 ;?>" class=" ic-vertblanc">
<span class="glyphicon
glyphicon-phone-alt icon-animated-bell"></span></button></a></li>
<li>
<a href="setting.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L38 ;?>" class=" ic-orangeblanc"><span class="glyphicon
glyphicon-cog"></span></button></a>
</li>
<li>
<a href="scripts/deconnexion.php"><button data-toggle="modal"  data-rel="tooltip" data-placement="top" title="<?php echo $L39 ;?>" class="ic-dec"><span class="glyphicon
glyphicon-off "></span></button></a></li>
</ul>






        
        </div>
      </div>
	  
	  

	
	<div class="col-md-3">
      <div class="panel panel-default panel-profile" style=" border:1px solid white;">

<a href="<?php echo $Pub1["lien"];?>"><img class="img-responsive" width="320px" src="assets/images/pub/<?php echo $Pub1["photoPub"];?>" alt="<?php echo $Pub1["nomPub"];?>"/></a>
	
                 
	 <br> 
<a href="<?php echo $Pub2["lien"];?>"><img class="img-responsive" width="320px" src="assets/images/pub/<?php echo $Pub2["photoPub"];?>" alt="<?php echo $Pub2["nomPub"];?>"/></a>

	  
	  
</div>
    </div>

	
	
     
	
</section>
	</div>
	
	
	
	
	
	


	
            </div><!-- /.blog-post -->

         
          

        </div><!-- /.blog-main -->

		   
		
		 
        

      </div>
<p class="text-xs-center"> Our Sponsors</p>	  
<marquee direction="right">
<ul>
<?php 

	while($res=$sponsor->fetch())
	{
			echo '<li><a href="'.$res["lien"].'"><img src="assets/images/sponsors/'.$res["logoSP"].'" alt="'.$res["nomSP"].'"/></a></li> ';
	}

?>
</ul>
</marquee>	  
	  
	  </div><!-- /.container -->

   <footer class="blog-footer2">
	
	 
        
       <p>&copy; 2016 Talentfinders Developers &middot; <a href="about.php"><?php echo $L1 ;?></a>&middot; <a href="contact.php"><?php echo $L25 ;?></a>&middot; <a href="job.php"><?php echo $L26 ;?></a>&middot; <a href="rule.php"><?php echo $L27 ;?></a> 
	   <?php 
	   
	  
	

							if ((isset($_SESSION['pseudo'])) && ($admin == 1))
								{
									
									echo ' &middot; <a href="admin/admin.php">'.$L28.'</a>';
								}


	
								?>
	    </p>
     
    </footer>
	
	
<!-- /. MENU modal START -->	
	
	
<!-- /.modal -->	
	<div class="modal" id="login">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn  btn-danger btn-minier pull-right" data-dismiss="modal"><?php echo $L8 ;?></button>


<h4 class=" modal-title  blue lighter bigger">
												<i class="ace-icon fa fa-user blue"></i>
												<?php echo $L7 ;?>
											</h4>

</div>
<div class="modal-body">
<!-- /.login -->

									
											<form action="scripts/login.php" method="Post">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="pseudo" placeholder="<?php echo $L9 ;?>" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" name="password" placeholder="<?php echo $L10 ;?>" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														
														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110"><?php echo $L5 ;?></span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											
										</div><!-- /.modal body end -->

									
											
									
								

<!-- /.login end -->

<div class="modal-footer">

<div>
												<a data-dismiss="modal" data-toggle="modal" href="#forgot" class="pull-left">
													<i class="ace-icon fa fa-arrow-left"></i>
													<?php echo $L11 ;?>
												</a>
											
												<a  data-dismiss="modal" data-toggle="modal" href="#sign" class="pull-right ">
													<?php echo $L12 ;?>
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
															
</div>
</div>
</div>
</div></div>
<!-- /.modal end -->	

<!-- /.modal sign up -->
	<div class="modal" id="sign">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier pull-right" data-dismiss="modal"><?php echo $L8 ;?></button>
<h4 class="modal-title green lighter bigger">
												<i class="ace-icon fa fa-users green"></i>
												<?php echo $L13 ;?>
											</h4>
</div>
<div class="modal-body">
<!-- /.sign up -->

												
													
														
											<p> <?php echo $L14 ;?> </p>

											<form action="scripts/insert-register.php" method="POST">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" name="email" placeholder="<?php echo $L15 ;?>" autofocus required />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" name="pseudo" placeholder="<?php echo $L9 ;?>"  required=""/>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="<?php echo $L10 ;?>"   required pattern="\w{4,15}"/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password_confirm" class="form-control" placeholder="<?php echo $L16 ;?>"  required pattern="\w{4,15}">
															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>
													
																										
													<div class="col-xs-12 col-sm-9">
																	<div>
																		<label class="line-height-1 blue">
																			<input name="Genre" value="M" type="radio" class="ace" />
																			<span class="lbl"> <?php echo $L17 ;?></span>
																		</label>
																	</div>

																	<div>
																		<label class="line-height-1 blue">
																			<input name="Genre" value="F" type="radio" class="ace" />
																			<span class="lbl"> <?php echo $L18 ;?></span>
																		</label>
																	</div>
																</div>

																						
											


<!-- /.sign up end -->
</div>
<div class="modal-footer">

<div class="clearfix">

<button type="submit" class="width-50 btn btn-sm btn-success">
															<span class="bigger-80"><?php echo $L6 ;?></span>

															</button>
														

														
													</div>
													<div>
												<a  data-dismiss="modal" data-toggle="modal" href="#login" class="user-signup-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													 <?php echo $L19 ;?>
													</a>
											</div>
												</fieldset>
											</form>
										

									
</div>
</div>
</div>
</div></div>
<!-- /.modal sign end -->	
		


<!-- /.modal -->	
	<div class="modal" id="Lang">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier  pull-right" data-dismiss="modal"><?php echo $L8 ;?></button>
<h4 class="modal-title  red lighter bigger">
												Choose your Language
											</h4>
</div>
<div class="modal-body center">
<!-- /.Language -->

<p><a href="scripts/Langue.php?langue=English" >English</a></p>
<p><a href="scripts/Langue.php?langue=French" >Français</a></p>
<p><a href="scripts/Langue.php?langue=Deutch" >Deutsh</a></p>
<p><a href="scripts/Langue.php?langue=Spanish" >Spanish</a></p>


	  
	  
	  
	  


<!-- /.Language end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->

									

									
									
									

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>
		
		<script type="text/javascript">
		
		jQuery(function($) {
		
		
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
		$('[data-rel=tooltip]').tooltip();
				$('[data-rel=popover]').popover({html:true});
			
			$( "#hide-option" ).tooltip({
					hide: {
						effect: "explode",
						delay: 250
					}
				});
			
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			});
			
			
			
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
 <script src="vendor/bootstrap/js/bootstrap.js"></script>

    <!-- Plugin JavaScript -->
   
  		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		
		
		<!-- inline scripts related to this page -->
	</body>
</html>
