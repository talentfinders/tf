<?php

session_start();
require ('scripts/config.php');

	 	  
if (isset($_SESSION['pseudo']))
								{

							 $query = $bdd->query("	SELECT * FROM profile where nomMemb='".$_SESSION['pseudo']."'")->fetch(); 
	
	}
	$video = $bdd->query("	SELECT * FROM Competition,profile where Competition.auteur = profile.nomMemb order by id asc "); 

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
	
	<br><br><br>
	
<div class="page-header about center" style="color:;">
					
								<?php echo $L30 ;?>
								<span class="
fa fa-trophy "></span>
								</div> 
</br>
<div class="container">


	<div class="row">
   
	 
	 <section >
 <?php 
		  while($videoselect=$video->fetch())
		  {
			
				?>
         
				 

       <div class="col-md-3">
		
      <div class="panel panel-default panel-profile " style=" background-color:white; border:1px solid white;">
        <div class="panel-heading " style=" background-color:white;">
  <a class="media-left" href="user-area.php?pseudo=<?php echo $videoselect['auteur']; ?>">
      <img class="media-object img-circle" width="30px" src="assets/images/avatars/user/<?php echo $videoselect['photo']; ?>">
    </a>
    <div class="media-body" >
      <div class="media-heading">
        <small class="pull-right"><?php echo $videoselect['temps']; ?></small>
        <small class="m-b-0">
		<a  href="user-area.php?pseudo=<?php echo $videoselect['auteur']; ?>"><?php echo $videoselect['auteur']; ?>
      </a></small>
      </div></div></div>
        <div class=" text-center" style="background-color:white; border:1px solid white;">
          
		  	 <a href="videoCompetition.php?lien=<?php echo $videoselect['lienVid']; ?>"><img class="img-responsive" width="300px" src="assets/images/home-img/<?php echo $videoselect['imageVid']; ?>"  /></a>

    		<small class="panel-title"><?php echo $videoselect['titleVid']; ?></small>
			<hr>
		   <div class="panel-heading">  
 <a href="#test" style="color:rgb(247,83,79); font-size:25px; margin-left:0px; text-decoration:none;" class="fa fa-heart pull-left"
 data-rel="popover"  data-placement="bottom" 
		data-content="
		
		<p class='center'><button data-toggle='modal' href='#login' class='btn btn-minier btn-primary no-border'><?php echo $L5 ;?></button><br><br>
		<button data-toggle='modal' href='#sign' class='btn btn-minier btn-success no-border'><?php echo $L6 ;?></button>
			  </p>
			
			"
 ></a>
 <span class="pull-left "><?php echo $videoselect['nbLike']; ?> <?php echo $L59 ;?> </span>
 
 
 
 <a href="#test" style="color:rgb(0,45,86); font-size:20px; margin-left:0px; text-decoration:none;" class="fa fa-eye pull-right"
 data-rel="popover"  data-placement="bottom" 
		data-content="
		
		<p class='center'><button data-toggle='modal' href='#login' class='btn btn-minier btn-primary no-border'><?php echo $L5 ;?></button><br><br>
		<button data-toggle='modal' href='#sign' class='btn btn-minier btn-success no-border'><?php echo $L6 ;?></button>
			  </p>
			
			"
 ></a>
 <span class="pull-right "><?php echo $videoselect['nbVue']; ?> </span>

</div><hr>
         
		  </div></div></div>
		  
 <?php 
		  }
		  
		   ?>		  
		  
</section>

 
	</div>	
	
	
	
	
	
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

<!-- /.modal -->	
	<div class="modal" id="JoinCompet" style=" background-color:rgb(0,45,86); color:white;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier  pull-right" data-dismiss="modal">Close</button>
<h4 class="modal-title  red lighter bigger">
												Register for this Competion
											</h4>
</div>
<div class="modal-body center">
<!-- /.Language -->
<div class="panel panel " style="">
        <div  class="panel-heading center" style="background-color:white; font-size:25px; color:gray; border:1px solid white; ">Upload Your video
		<a style="color:gray;text-decoration:none;" class="pull-right  glyphicon glyphicon-film" href="#"></a>
		
		</div>
		
		<div class="panel-body " style="background-color:white;">
          
<div  class="center">

<form><input type="file" name="video" />
<button type="submit" class="btn btn-sm btn-success">Upload</button></form>
 <hr>              
            </div>
          
        </div>
      </div>	  


<!-- /.Language end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->



<!-- /.modal -->	
	<div class="modal" id="ContestList" style=" background-color:rgb(0,45,86); color:white;">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier  pull-right" data-dismiss="modal">Close</button>
<h4 class="modal-title  red lighter bigger">
												Liste of Contestants
											</h4>
</div>
<div class="modal-body center">
<!-- /.Language -->

<p><a href="#" >Allison</a></p>


	  
	  
	  
	  


<!-- /.Language end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->

		<!-- page specific plugin scripts -->
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

    <!-- Plugin JavaScript -->
   
  		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		
	</body>
</html>
