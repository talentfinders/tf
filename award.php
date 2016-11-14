<?php

session_start();
require ('scripts/config.php');

	 	  
if (isset($_SESSION['pseudo']))
								{

							 $query = $bdd->query("	SELECT * FROM profile where nomMemb='".$_SESSION['pseudo']."'")->fetch(); 
	}
	$bestmembre = $bdd->query("	SELECT * FROM membres,profile where membres.pseudo=profile.nomMemb and profile.nomMemb!='Admin' and profile.nomMemb!='Talentfinders'  limit 5"); 
$winner = $bdd->query("		SELECT * FROM competition,profile,membres where membres.pseudo=competition.auteur and membres.pseudo=profile.nomMemb and profile.nomMemb!='Admin' and profile.nomMemb!='Talentfinders' order by nbLike desc  limit 3"); 

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
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
<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/colorbox.min.css" />

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
		<!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
	<link href="css/blog.css" rel="stylesheet">
 <!-- Theme JavaScript -->
    <script src="js/grayscale3.js"></script>
	
 <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body >
		 <!-- Navigation -->
     <nav class="navbar navbar-custom-award navbar-fixed-top" role="navigation">
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
								<img class='img-circle' src='assets/images/avatars/user/".$query['photo']."' alt='Photo' width='35px' height='35px' />	
																
							</a>";
								}else
								{
								echo "<img class='img-circle'  src='assets/images/avatars/avatar.png' alt='Photo' width='35px' height='35px' /> ";	
								}
										?>
							
										
				
				
            </div>
            <!-- /.navbar-collapse -->
			
			
        </div>
		
		
        <!-- /.container -->
		
    </nav>

    <!-- Intro Header -->
 <!-- /.script progress-bar -->
 
<br><br><br>
<div class="page-header award center">
							
								<?php echo $L61 ;?>
								<span class="fa fa-trophy"></span>
						</div>       
<div class="container ">

<div class="row">
<div class="col-md-6 col-lg-6 ">
      <div class="panel panel " style="">
        <div  class="panel-heading center" style="background-color:white; font-size:25px; color:gray; border:1px solid white; "><?php echo $L62 ;?>
		of Competition
		<a style="color:gold;text-decoration:none;" class="pull-right  fa fa-trophy" href="#"></a>
		
		</div>
		
		<div class="panel-body " style="background-color:white;">
          
<div  class="center">
<hr>
<p><?php 

while($win=$winner->fetch())
{ 

									

 ?>
<div id="memb" class="row">
<div  class="panel-heading center col-md-offset-3" style="background-color:white; font-size:18px; color:gray; ">
		<div class="col-md-2 col-lg-2">
  
		<p >
		<a  href= "user-area.php?pseudo=<?php echo ucfirst(strtolower(htmlspecialchars($win['nomMemb'])))?>">
		<img class="img-circle img-responsive" src="assets/images/avatars/user/<?php echo $win['photo']; ?>" width="50px" height="50px"/> 
		
		</a></p>
		</div>
	
	<span class="col-md-4 col-lg-4">   
        
		
		<a href="user-area.php?pseudo=<?php echo ucfirst(strtolower(htmlspecialchars($win['nomMemb'])));?>" name="oui"><?php echo ucfirst(strtolower(htmlspecialchars($win['nomMemb']))); ?></a>
		</span>
		

	
  </div></div><hr>
<?php


							}
?></p>
<hr>
             
            </div>
          
        </div>
      </div>
    </div>


	
	<div class="col-md-6 col-lg-6 ">
      <div class="panel panel " style="">
        <div  class="panel-heading center" style="background-color:white; font-size:25px; color:gray; border:1px solid white; ">Top 5 Members
		<a style="color:gold;text-decoration:none;" class="pull-right  fa fa-users" href="#"></a>
		
		</div>
		
		<div class="panel-body " style="background-color:white;">
          
<div  class="center">
<hr>
<p><?php 


while($dnn=$bestmembre->fetch())
{ 

									

 ?>
<div id="memb" class="row">
<div  class="panel-heading center col-md-offset-3" style="background-color:white; font-size:18px; color:gray; ">
		<div class="col-md-2 col-lg-2">
  
		<p >
		<a  href= "user-area.php?pseudo=<?php echo ucfirst(strtolower(htmlspecialchars($dnn['nomMemb'])))?>">
		<img class="img-circle img-responsive" src="assets/images/avatars/user/<?php echo $dnn['photo']; ?>" width="50px" height="50px"/> 
		
		</a></p>
		</div>
	
	<span class="col-md-4 col-lg-4">   
        
		
		<a href="user-area.php?pseudo=<?php echo ucfirst(strtolower(htmlspecialchars($dnn['nomMemb'])));?>" name="oui"><?php echo ucfirst(strtolower(htmlspecialchars($dnn['nomMemb']))); ?></a>
		</span>
		
<div class="col-md-1 col-lg-1">
			<?php 
							if ($dnn['career']=='membre')
								{
									echo '<span class="label label-primary arrowed">'.$dnn['career'].'</span>
       ';
								}else if ($dnn['career']=='photograph')
									
									{
										echo '<span class="label label-success arrowed">'.$dnn['career'].'</span>
       ';
								}	else if ($dnn['career']=='Rapper')
									
									{
										echo '<span class="label label-purple arrowed">'.$dnn['career'].'</span>
       ';
								}	else if ($dnn['career']=='admin')
									
									{
										echo '<span class="label label-danger arrowed">'.$dnn['career'].'</span>
       ';
								}	
								?>			
 </div>
	
  </div></div><hr>
<?php


							}
?>
               </p>
<hr>
  
            </div>
			
        </div>
      </div>
    </div> 


</div>

</div>




    <footer class="blog-footer">
	<p>&copy; 2016 Talentfinders Developers &middot; <a href="about.php"><?php echo $L1 ;?></a>&middot; <a href="contact.php"><?php echo $L25 ;?></a>&middot; <a href="job.php"><?php echo $L26 ;?></a>&middot; <a href="rule.php"><?php echo $L27 ;?></a> 
	   <?php 
	   
	  
	

							if ((isset($_SESSION['pseudo'])) && ($admin == 1))
								{
									
									echo ' &middot; <a href="admin/admin.php">'.$L28.'</a>';
								}


	
								?>
	    </p>
     
    </footer>

<script>
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-award");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-award");
    }
}
$(window).scroll(collapseNavbar);
$(document).ready(collapseNavbar);

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $(this).closest('.collapse').collapse('toggle');
});
</script>
	

	</body>
</html>
