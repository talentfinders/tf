<?php
header('cache-control:no-cache');
session_start();
require ('scripts/config.php');

	 	  
if (isset($_SESSION['pseudo']))
								{

							 $query = $bdd->query("	SELECT * FROM profile where nomMemb='".$_SESSION['pseudo']."'")->fetch(); 


							 }
							 
							 $video = $bdd->query("	SELECT * FROM video where lienVid='".$_GET['lien']. "' ")->fetch(); 
$_SESSION['idVid']=$video['idVid'];

$update= $bdd->query("UPDATE video SET nbVue=nbVue+1 where lienVid='".$_GET['lien']. "' ");
          		   
		 $update->closeCursor();
if (isset($_SESSION['pseudo']))
	{
$likecount = $bdd->query("	SELECT * FROM likes where idVid ='".$_SESSION['idVid']."' and auteur ='".$_SESSION['pseudo']."'")->rowcount(); 
}
$video1 = $bdd->query("	SELECT * FROM video  where categorieVid='".$video['categorieVid']."' limit 0,1")->fetch(); 
$video2 = $bdd->query("	SELECT * FROM video  where categorieVid='".$video['categorieVid']."' limit 2,1 ")->fetch(); 
$video3 = $bdd->query("	SELECT * FROM video  where categorieVid='".$video['categorieVid']."' limit 7,1")->fetch(); 
$video4 = $bdd->query("	SELECT * FROM video  where categorieVid='".$video['categorieVid']."' limit 6,1")->fetch(); 
$video5 = $bdd->query("	SELECT * FROM video  where categorieVid='".$video['categorieVid']."' limit 1,1")->fetch(); 
$video6 = $bdd->query("	SELECT * FROM video  where categorieVid='".$video['categorieVid']."' limit 3,1")->fetch(); 
$video7 = $bdd->query("	SELECT * FROM video  where categorieVid='".$video['categorieVid']."' limit 4,1")->fetch(); 
$video8 = $bdd->query("	SELECT * FROM video  where categorieVid='".$video['categorieVid']."' limit 5,1")->fetch(); 
$sponsor = $bdd->query("	SELECT * FROM sponsors where type='physique' or type='morale'  "); 
$diffusion = $bdd->query("	SELECT notif FROM notification  ")->fetch(); 
$Pub1 = $bdd->query("	SELECT * FROM publicite where type='Pub3' ")->fetch(); 


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
		
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

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
	<script src="free002/video.js"></script>

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>
		<!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
	<link href="css/blog.css" rel="stylesheet">
 <!-- Theme JavaScript -->
    <script src="js/grayscale2.js"></script>
	
 <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
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
								<img class='img-circle' src='assets/images/avatars/user/".$query['photo']."' alt='Photo'  width='40px' />	
																
							</a>";
								}else
								{
								echo "<img class='img-circle'  src='assets/images/avatars/avatar.png' alt='Photo'  width='40px' /> ";	
								}
										?>
							
										
				
				
            </div>
            <!-- /.navbar-collapse -->
			
			
        </div>
		
		
        <!-- /.container -->
		<div class="progress progress">
<div class="progress-bar progress-bar-warning"></div>
</div>
    </nav>


   <script>
function timer(n) {
$(".progress-bar").css("width", n + "%");
if(n < 100) {
setTimeout(function() {
timer(n + 10);
}, 200);
}
}
$(".progress").delay(4000).hide("slow");

$(function (){
window.onload=function() {
timer(0);
};
});
</script> 

</br></br>
<div class="container">	

 
   
	 
<marquee style="color:purple; font-size:18px;" direction="left" >
<?php echo $diffusion['notif'] ;?>

</marquee>	


<div class="row">
   
	 
 <section class=" col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-1">
	 

 <div class="regler embed-responsive embed-responsive-16by9" 
 style="background-color:black; color:white; font-size:30px;  padding-top:20px; text-align:center;"><br><br>
 Talentfinders.org
  <iframe class="embed-responsive-item " width="790px" height="500px" src="<?php echo $_GET['lien'] ?>" frameborder="0" loop autoplay allowfullscreen ></iframe>
</div>
<div class=" panel panel panel-heading">

	 <div> <span style="color:;font-size:30px; "><?php echo $video['nomVid']; ?></span> <span class="fa fa-eye pull-right"></span><span class="pull-right"><?php echo $video['nbVue']; ?></span>
 </div>
 
 </div>


</section>

<section class=" col-md-3 col-lg-3 ">
	 
<div class="panel panel-default panel-profile" style=" border:1px solid white;">
                  
<a href="<?php echo $Pub1["lien"];?>"><img class="img-responsive" width="320px" src="assets/images/pub/<?php echo $Pub1["photoPub"];?>" alt="<?php echo $Pub1["nomPub"];?>"/></a>

	  
</div>

</section>


  
	
 
	
	</div>
 <div class="row ">	
	
<div class="">
      <div class="panel panel-default panel-profile " style=" border:1px solid white;">
        <div class="panel-heading panel-primary" style="background-color:white; border:1px solid white; "><h4>More Videos
		</h4>
		</div>
		
		
        <div class="panel-body text-center" style="background-color:white; border:1px solid white;">
         <div class="  col-xs-6 col-sm-3 col-lg-3 col-md-3">
						
		  <a href="video.php?lien=<?php echo $video1['lienVid']; ?>"><img class="img-responsive" width="300" src="assets/images/home-img/<?php echo $video1['imageVid']; ?>"  alt=' no video'/></a>

<h5 class="panel-title"><?php echo $video1['nomVid']; ?></h5>
			<br>

		  </div>
				<div class="  col-xs-6 col-sm-3 col-lg-3 col-md-3">
						
		  <a href="video.php?lien=<?php echo $video2['lienVid']; ?>"><img class="img-responsive" width="300" src="assets/images/home-img/<?php echo $video2['imageVid']; ?>" alt=' no video' /></a>

<h5 class="panel-title"><?php echo $video2['nomVid']; ?></h5>
			<br>

		  </div>
				<div class="  col-xs-6 col-sm-3 col-lg-3 col-md-3">
						
		  <a href="video.php?lien=<?php echo $video5['lienVid']; ?>"><img class="img-responsive" width="300" src="assets/images/home-img/<?php echo $video5['imageVid']; ?>" alt=' no video' /></a>

<h5 class="panel-title"><?php echo $video5['nomVid']; ?></h5>
			<br>

		  </div>
				<div class="  col-xs-6 col-sm-3 col-lg-3 col-md-3">
						
		  <a href="video.php?lien=<?php echo $video6['lienVid']; ?>"><img class="img-responsive" width="300" src="assets/images/home-img/<?php echo $video6['imageVid']; ?>" alt=' no video' /></a>

<h5 class="panel-title"><?php echo $video6['nomVid']; ?></h5>
			<br>

		  </div> </div>
		  
		  
		  <hr>
			
		 <div class="panel-body text-center" style="background-color:white; border:1px solid white;">
       	
			
				 <div class="  col-xs-6 col-sm-3 col-lg-3 col-md-3">
						
		  <a href="video.php?lien=<?php echo $video3['lienVid']; ?>"><img class="img-responsive" width="300" src="assets/images/home-img/<?php echo $video3['imageVid']; ?>" alt=' ' /></a>

<h5 class="panel-title"><?php echo $video3['nomVid']; ?></h5>
			<br>

		  </div>
				 <div class="  col-xs-6 col-sm-3 col-lg-3 col-md-3">
						
		  <a href="video.php?lien=<?php echo $video4['lienVid']; ?>"><img class="img-responsive" width="300" src="assets/images/home-img/<?php echo $video4['imageVid']; ?>" alt=' ' /></a>

<h5 class="panel-title"><?php echo $video4['nomVid']; ?></h5>
			<br>

		  </div>
				 <div class="  col-xs-6 col-sm-3 col-lg-3 col-md-3">
						
		  <a href="video.php?lien=<?php echo $video8['lienVid']; ?>"><img class="img-responsive" width="300" src="assets/images/home-img/<?php echo $video8['imageVid']; ?>" alt=' ' /></a>

<h5 class="panel-title"><?php echo $video8['nomVid']; ?></h5>
			<br>

		  </div>
				 <div class="  col-xs-6 col-sm-3 col-lg-3 col-md-3">
						
		  <a href="video.php?lien=<?php echo $video7['lienVid']; ?>"><img class="img-responsive" width="300" src="assets/images/home-img/<?php echo $video7['imageVid']; ?>" alt=' ' /></a>

<h5 class="panel-title"><?php echo $video7['nomVid']; ?></h5>
			<br>

		  </div>
		  
		</div>
    </div></div>
        </div>
		
<p class="text-xs-center"> Our Sponsors</p>	  
<marquee direction="right">
<ul>
<?php 

	while($res=$sponsor->fetch())
	{
			echo '<li><a href="'.$res["lien"].'"><img class="img-responsive" src="assets/images/sponsors/'.$res["logoSP"].'" alt="'.$res["nomSP"].'"/></a></li> ';
	}

?>
</ul>
</marquee>		
</div>
     

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

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

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

 <!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		<script src="assets/js/jquery.inputlimiter.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>

		<script type="text/javascript">
		jQuery(function($) {
		
		
				
		$('[data-rel=tooltip]').tooltip();
				$('[data-rel=popover]').popover({html:true});
			
			$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			});
		</script>

		<!-- inline scripts related to this page -->
	</body>
</html>
