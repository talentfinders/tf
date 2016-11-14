<?php
header('cache-control:no-cache');
session_start();
require ('scripts/config.php');

	 	  
if (isset($_SESSION['pseudo']))
								{

							 $query = $bdd->query("	SELECT * FROM profile where nomMemb='".$_SESSION['pseudo']."'")->fetch(); 


							 }
$video = $bdd->query("	SELECT * FROM Competition where lienVid='".$_GET['lien']. "' ")->fetch(); 
 $_SESSION['idVid']= $video['id'];
				
	$video1 = $bdd->query("	SELECT * FROM Competition order by id asc "); 
$comt = $bdd->query("	SELECT count(*) as nbcomment FROM commentaire where lienVid='".$_SESSION['idVid']. "' ")->fetch(); 
$update= $bdd->query("UPDATE video SET nbVue=nbVue+1 where idVid='".$_SESSION['idVid']. "' ");
          		   
		 $update->closeCursor();
		 $Pub1 = $bdd->query("	SELECT * FROM publicite where type='Pub3' ")->fetch(); 

		 if (isset($_SESSION['pseudo']))
	{
$likecount = $bdd->query("	SELECT * FROM likes where idVid ='".$_SESSION['idVid']."' and auteur ='".$_SESSION['pseudo']."'")->rowcount(); 
}
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
<br><br><br>
<div class="container">	

 
   
	 
	


<div class="row">
   
	 
 <section class=" col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-1">
	 

 <div class="regler embed-responsive embed-responsive-16by9"
 style="background-color:black; color:white; font-size:30px;  padding-top:20px; text-align:center;"><br><br>
 Talentfinders.org
  <iframe class="embed-responsive-item " width="790px" height="500px" src="<?php echo $_GET['lien'] ?>.mp4" autoplay="false"></iframe>
</div></br>
<div class=" panel panel panel-heading">

	 <div>
	 <span style="color:;font-size:30px; "><?php echo $video['titleVid']; ?></span> <small>by <a class="" href="user-area.php?pseudo=<?php echo $video['auteur']; ?>">
     <?php echo $video['auteur']; ?>
			 </a></small>
	 <span class="fa fa-eye pull-right"></span><span class="pull-right"><?php echo $video['nbVue']; ?></span><hr>
   <p>
   <?php 
							if (isset($_SESSION['pseudo']))
								{
									 if($likecount==0)
										 {?> 
										
<style>
  
  #like{display:none;}
  
</style>	

  
									<form id="unlike"action="#" method="Post" >
									<input  type="hidden" name="idPhoto" id="idPhoto" value="<?php echo $_SESSION['idVid'];?>"   />
									<a  href="#." onClick="posts(),clear()" style="color:; font-size:25px; 
									text-decoration:none;" class="fa fa-heart "></a>
									</form>
									
									<form id="like"action="#" method="Post" >
									<input  type="hidden" name="mess" id="mess" value="<?php echo $_SESSION['idVid'];?>"   />
									<a  href="#."  style="color: rgb(223,17,28); font-size:35px; 
									text-decoration:none;" class="fa fa-heart "></a>
									</form><?php
								} else if($likecount==1)
								{
									?>	
						<form id=""action="#" method="Post" >
									<input  type="hidden" name="idPhoto" id="idPhoto" value="<?php echo $_SESSION['idVid'];?>"   />
									<a  href="#."  style="color:rgb(255,40,40); font-size:35px; 
									text-decoration:none;" class="fa fa-heart "></a>
									</form>
				
							<?php	}
?>
							<script>
  $(function() {
    
    $('#unlike').click(function() {
      $('#unlike:even').hide();
	  $('#like:even').show();
    } )
   
  });
</script><?php
								}else
								
								{
									?><a  href="#test"style="color:; font-size:25px;  text-decoration:none;" class="fa fa-thumbs-up " 
   data-rel="popover"  data-placement="bottom" 
		data-content="
		
		<p class='center'><button data-toggle='modal' href='#login' class='btn btn-minier btn-primary no-border'><?php echo $L5 ;?></button><br><br>
		<button data-toggle='modal' href='#sign' class='btn btn-minier btn-success no-border'><?php echo $L6 ;?></button>
			  </p>
			
			"
   >    </a><?php
								}	
								?>
								
    <div id="lik"> </div> 



   
   <a href="#test" style="color:gold; font-size:25px;  text-decoration:none;" class="glyphicon glyphicon-star pull-right"
   data-rel="popover"  data-placement="bottom" 
		data-content="
		
		<p class='center'><button data-toggle='modal' href='#login' class='btn btn-minier btn-primary no-border'><?php echo $L5 ;?></button><br><br>
		<button data-toggle='modal' href='#sign' class='btn btn-minier btn-success no-border'><?php echo $L6 ;?></button>
			  </p>
			
			"
   >  </a>     
 </p>   
</div>	

<style>
#cadre_chat{ 
height:350px;
overflow:auto;
}

</style>
														<a class="accordion-toggle collapsed pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
															<i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
															 <a  data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
style="color:rgb(0,45,86); font-size:25px;  text-decoration:none;" class="fa fa-comment-o pull-right">
    </a><span class="pull-right"><?php echo $comt['nbcomment']; ?> </span>

														</a><hr>		
												<div class="comments panel-collapse collapse" id="collapseThree">
								
													<form action="#" method="post">
														<div class="form-actions">
															<div class="input-group">
													
			<textarea onKeyPress="if(event.keyCode==13){post(); clear();}" name="message" id="message" placeholder="Type your comment here ..." id="form-field-9" maxlength="120" class="form-control limited"
															 rows="2px" id="form-field-9"  name="message"></textarea>
														
																<span class="input-group-btn">
																 <?php 
							if (isset($_SESSION['pseudo']))
								{
									echo ' <button onClick="post(), clear()"  id="message1" class="btn btn-lg btn-primary no-border" type="button">
																		<i class="ace-icon fa fa-send"></i>
																		
																	</button>';
								} else
								{
									?>
									<button class="btn btn-lg btn-primary no-border" type="button"   data-rel="popover"  data-placement="bottom" 
		data-content="
		
		<p class='center'><button data-toggle='modal' href='#login' class='btn btn-minier btn-primary no-border'><?php echo $L5 ;?></button><br><br>
		<button data-toggle='modal' href='#sign' class='btn btn-minier btn-success no-border'><?php echo $L6 ;?></button>
			  </p>
			
			"
   > <i class="ace-icon fa fa-send"></i>   </button><?php
								}	
								 
								?>
																	
																	
																</span>
															</div>
														</div>
													</form>
													 
													 			
															
													 <div id="cadre_chat">
													 
																	
																</div></div>			
	</div>
											


</section>
<section class=" col-md-3 col-lg-3 ">
	 
<div class="panel panel-default panel-profile" style=" border:1px solid white;">
                  
<a href="<?php echo $Pub1["lien"];?>"><img class="img-responsive" width="320px" src="assets/images/pub/<?php echo $Pub1["photoPub"];?>" alt="<?php echo $Pub1["nomPub"];?>"/></a>

	  
</div>

</section>

  
	
 
	
	</div>
 <div class="row ">	
	
<div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
      <div class="panel panel-default panel-profile " style=" border:1px solid white;">
        <div class="panel-heading panel-primary" style="background-color:white; border:1px solid white; "><h4>More Videos
		<a style="color:gray;text-decoration:none;" class="glyphicon glyphicon-option-horizontal pull-right " title="View all" href="video.html">
	</a></h4>
		</div>
        <div class="panel-body text-center" style="background-color:white; border:1px solid white;">
          <?php 
		  while($videoselect=$video1->fetch())
		  {
			
				?>
         
		
		  
		   <div class="col-md-3">
		
      <div class="panel panel-default panel-profile " style=" background-color:white; border:1px solid white;">
        
        <div class=" text-center" style="background-color:white; border:1px solid white;">
          
		  	 <a href="videoCompetition.php?lien=<?php echo $videoselect['lienVid']; ?>"><img class="img-responsive" width="300px" src="assets/images/home-img/<?php echo $videoselect['imageVid']; ?>"  /></a>
<small >
    		 <?php echo $videoselect['auteur']; ?>
			</small>
		   
         
		  </div></div></div>
		  <?php 
		 
		  }
		  $video1->closeCursor(); 
		   ?>
        </div></div>
      </div>
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
<script src="free001/msgfunction.js"></script>

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
<script href="free001/getMessage.js" type="text/javascript"></script>
        
		<!-- inline scripts related to this page -->
	</body>
</html>
