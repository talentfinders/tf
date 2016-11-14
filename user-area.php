<?php

session_start();
require ('scripts/config.php');

	 	  
if (isset($_SESSION['pseudo']))
								{

							 $query3 = $bdd->query("	SELECT * FROM profile,membres where profile.nomMemb = membres.pseudo and profile.nomMemb='".$_SESSION['pseudo']."'")->fetch(); 
	}
	
$query = $bdd->query("	SELECT * FROM profile,membres where profile.nomMemb = membres.pseudo and profile.nomMemb='".$_GET['pseudo']."'")->fetch(); 

 $query2 = $bdd->query("	SELECT * FROM connect where membreConnect='".$_GET['pseudo']."'")->rowcount(); 
	
	$image = $bdd->query("	SELECT * FROM photo where Auteur ='".$_GET['pseudo']."' order by idPhoto desc limit 15"); 
	if (isset($_SESSION['pseudo']))
	{
$followcount = $bdd->query("	SELECT * FROM follow where suivie ='".$_GET['pseudo']."' and suiveur ='".$_SESSION['pseudo']."'")->rowcount(); 

}

$followers = $bdd->query("	SELECT *  FROM follow,membres,profile where membres.pseudo=profile.nomMemb and profile.nomMemb=follow.suiveur and suivie ='".$_GET['pseudo']."'"); 
$following = $bdd->query("	SELECT * FROM follow,membres,profile where  membres.pseudo=profile.nomMemb and profile.nomMemb=follow.suivie and suiveur ='".$_GET['pseudo']."'"); 
$follow = $bdd->query("	SELECT * ,count(suiveur) as nbfollowers FROM follow where suivie ='".$_GET['pseudo']."'")->fetch(); 
$followi = $bdd->query("SELECT * ,count(suivie) as nbfollowing FROM follow where suiveur ='".$_GET['pseudo']."'")->fetch(); 

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Talentfinders.org</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
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
		<!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
	<link href="css/blog.css" rel="stylesheet">
 <!-- Theme JavaScript -->
    <script src="js/grayscale2.js"></script>
	<script src="free002/follow.js"></script>
	
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
								<img class='img-circle' src='assets/images/avatars/user/".$query3['photo']."' alt='Photo' width='40px'  />	
																
							</a>";
								}else
								{
								echo "<img class='img-circle'  src='assets/images/avatars/avatar.png' alt='Photo' width='40px'  /> ";	
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

  <!-- /.script progress-bar -->
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

<div class="container ">
				
				
 
 <div class="row">
  <div class="">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								

								
									<div id="" class="">
										<div class="col-xs-12 col-sm-3 center">
											<div>
										<span class="profile-picture">
							<a href="assets/images/avatars/user/<?php echo $query['photo'];?>" class="group3" title=" <?php echo $query['pseudo']; ?>" >
	
		
		<img id="avatar" class="editable img-responsive" src="assets/images/avatars/user/<?php echo $query['photo'];?>" alt="Photo" />
							</a>					
							
												
							
										</span>
												<div class="tools">
																		<div class="action-buttons bigger-125">
																			
																			
																		</div>
																	</div>
												
												
												
											</div>

											
											<div class="profile-contact-info panel-body">
												<div class="align-center">
												
			
			 <?php 
							if (isset($_SESSION['pseudo']) and ($_SESSION['pseudo']== $_GET['pseudo']))
								{
								
								}else if (isset($_SESSION['pseudo']) and ($_SESSION['pseudo']!= $_GET['pseudo'])) 
									
									{
										 if($followcount==0)
										 {?> 
										
<style>
  
  #unfollow{display:none;}
  
</style>	

 

	<form id="follow" action="#" method="post" >
									<input  type="hidden" name="message" id="message" value="<?php echo $_GET['pseudo'];?>"   />
										<button  type="button"  onClick="post(),clear()" class=" width-65 btn btn-primary btn-sm"
																 data-rel="popover"  data-placement="bottom" 
		data-content="
		
		<p class='center'><button data-toggle='modal' href='#login' class='btn btn-minier btn-primary no-border'><?php echo $L5 ;?></button><br><br>
		<button data-toggle='modal' href='#sign' class='btn btn-minier btn-success no-border'><?php echo $L6 ;?></button>
			  </p>
			
			"
																 >
													<span class="ace-icon fa fa-plus-circle bigger-120"></span><?php echo $L42 ;?>
													</button></form>
													
													<form id="unfollow" action="#" method="post" >
									<input  type="hidden" name="mess" id="mess" value="<?php echo $_GET['pseudo'];?>"   />
										<button  type="button"  onClick="posts(),clear()" class=" width-65 btn btn-success btn-sm"
																   >
													<span class="ace-icon fa fa-check bigger-120"></span>following
													</button></form>
													
													
													
									<?php }else if ($followcount==1){ ?>
									<form id="unfollow" action="#" method="post" >
									<input  type="hidden" name="mess" id="mess" value="<?php echo $_GET['pseudo'];?>"   />
										<button  type="button"  onClick="posts(),clear()" class=" width-65 btn btn-success btn-sm"
																   >
													<span class="ace-icon fa fa-check bigger-120"></span>following
													</button></form>
													
													<form id="follow" action="#" method="post" >
									<input  type="hidden" name="message" id="message" value="<?php echo $_GET['pseudo'];?>"   />
										<button  type="button"  onClick="post(),clear()" class=" width-65 btn btn-primary btn-sm"
																 data-rel="popover"  data-placement="bottom" 
		data-content="
		
		<p class='center'><button data-toggle='modal' href='#login' class='btn btn-minier btn-primary no-border'><?php echo $L5 ;?></button><br><br>
		<button data-toggle='modal' href='#sign' class='btn btn-minier btn-success no-border'><?php echo $L6 ;?></button>
			  </p>
			
			"
																 >
													<span class="ace-icon fa fa-plus-circle bigger-120"></span><?php echo $L42 ;?>
													</button></form>
												
													
	<style>
  
  #follow{display:none;}
  
</style>
									
									<?php }
									
									}
								
								?>
			
																
													

																										
												</div>

												
												
											</div>
<script>
  $(function() {
    
    $('#follow').click(function() {
      $('#follow:even').hide();
	  $('#unfollow:even').show();
    } ),
	$('#unfollow').click(function() {
      $('#follow:even').show();
	  $('#unfollow:even').hide();
    } ); 
   
  });
</script> 


											<div class="hr hr12 dotted"></div>

											<div class="clearfix" >
												<div class="grid2">
													<span class="bigger-175 black"><?php echo $follow['nbfollowers']?></span>

													<br />
													<a data-toggle="modal" href="#Followers">Followers</a>
												</div>

												<div class="grid2">
													<span class="bigger-175 black"><?php echo $followi['nbfollowing']?></span>

													<br />
													<a data-toggle="modal" href="#Following">Following</a>
												</div>
											</div>

											<div class="hr hr16 dotted"></div>
											
											
 
										</div>

										<div class="col-xs-12 col-sm-9 ">
											

											
											<div class="profile-user-info " style="background-color:white;">
																<div class="profile-info-row">
																	<div class="profile-info-name"> <?php echo $L9 ;?> </div>

																	<div class="profile-info-value">
																		<span><?php echo $query['pseudo'];?></span>
																		
																																					
																	
																	</div>
																	
																</div>
																
																<div class="profile-info-row">
																	<div class="profile-info-name"><?php echo $L91 ;?> </div>

																	<div class="profile-info-value">
																		<span><?php echo $query['prenom'];?></span>
																		<span><?php echo $query['nom'];?></span>
																		
																		
																	
																	</div>
																	
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> <?php echo $L92 ;?> </div>

																	<div class="profile-info-value">
																		<i class="fa fa-map-marker light-orange bigger-110"></i>
																		<span><?php echo $query['paysMemb'];?></span>
																		
																		
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"><?php echo $L93 ;?></div>

																	<div class="profile-info-value">
																		<span><?php echo $query['career'];?></span>
																		
																		
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"><?php echo $L94 ;?></div>

																	<div class="profile-info-value">
																		<span><?php
												if($query2==1 )
												{
																		echo '<span style="color:green">ONLINE</span>';
																		
																		}else
																		{

																		echo '<span style="color:red">OFFLINE</span>';
																		}
												?></span>
																	</div>
																</div>
															</div>


											<div class="space-20"></div>
											
											</div>
											

											<div class="hr hr2 hr-double"></div>

											<div class="space-6"></div>
											<br><br>
<div class="row">											
											<div class="panel-body  "  >
											
  <diV class="social-login col-lg-offset-1 col-md-offset-1 col-sm-2 col-md-2 col-lg-2"><a class="btn btn-primary">
													<i class="ace-icon fa fa-facebook"></i>
												</a></br><?php echo $query['facebook'];?> 
												
												</div>



	<diV class="social-login col-sm-2 col-md-2 col-lg-2"><a class="btn btn-info">
											
 													<i class="ace-icon fa fa-twitter"></i>
												</a></br><?php echo $query['twitter'];?> 
												
												</div>
												
												
	 <diV class="social-login col-sm-2 col-md-2 col-lg-2"><a class="btn ">
											
													<i class="ace-icon fa fa-instagram"></i>
												</a></br><?php echo $query['instagram'];?>
												
																			
												</div>
	
	<diV class="social-login col-sm-2 col-md-2 col-lg-2"><a class="btn btn-danger">
											
													<i class="ace-icon fa fa-envelope"></i>
												
												</a></br><?php echo $query['email'];?>
													</div>
												
												</div></div>
											
											<button class="btn btn-primary btn-block align-center">PHOTOS</button>
											

									</div></div></div></div>
									
									
	<?php 
		  while($videoselect=$image->fetch())
		  {
			
				?>
         <div class="row">
   
	 
	 <section class="media-body-inline-img">
 
				 <br>

       <div class=" col-sm-offset-3 col-sm-6 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6 ">
		
      <div class=" " style=" background-color:white; border:1px solid white;">
       
        <div class=" text-center" style="background-color:white; border:1px solid white;">
          
		  	<a href="assets/images/gallery/<?php echo  $videoselect['photo_path']; ?>" class="group3" title=" <?php echo  $videoselect['title']; ?>" >
	
		
		<img class=" img-responsive"  src="assets/images/gallery/<?php echo $videoselect['photo_path']; ?>"/>
	</a>
    		<p class="panel-heading"> <?php echo $videoselect['title']; ?> </p>

<hr>

 
</div>
         
		  </div></div></section>

 
	</div>	

		  
 <?php 
		  }
		  
		   ?>		  
		  
	<br><br>
	
		
	
	
	
	
	
	
	
	
	
	
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
	<div class="modal" id="Followers">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier  pull-right" data-dismiss="modal">Close</button>
<h4 class="modal-title  blue lighter bigger">
												Followers
											</h4>
</div>
<div id="memb2" class="modal-body center">
<!-- /.Language -->

<?php 
 while($lis=$followers->fetch())
 {
	
	 ?>
<div id="memb" class="row">
<div  class="panel-heading center col-md-offset-3" style="background-color:white; font-size:18px; color:gray; ">
		<div class="col-md-2 col-lg-2">
  
		<p >
		<a  href= "user-area.php?pseudo=<?php echo ucfirst(strtolower(htmlspecialchars($lis['nomMemb'])))?>">
		<img class="img-circle img-responsive" src="assets/images/avatars/user/<?php echo $lis['photo']; ?>" width="50px" height="50px"/> 
		
		</a></p>
		</div>
	
	<span class="col-md-4 col-lg-4">   
        
		
		<a href="user-area.php?pseudo=<?php echo ucfirst(strtolower(htmlspecialchars($lis['nomMemb'])));?>" name="oui"><?php echo ucfirst(strtolower(htmlspecialchars($lis['nomMemb']))); ?></a>
		</span>
		

	
  </div></div><hr>
<?php
 }
?>   


<!-- /.Language end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->
	
<style>
#memb1{ 
		overflow:auto;
		height:550px;
		
		}
#memb2{ 
		overflow:auto;
		height:550px;
		
		}
</style>
	
	<!-- /.modal -->	
	<div class="modal" id="Following">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier  pull-right" data-dismiss="modal">Close</button>
<h4 class="modal-title  blue lighter bigger">
												Following
											</h4>
</div>
<div id="memb1" class="modal-body center">
<!-- /.Language -->

<?php 
 while($lists=$following->fetch())
 {
	  ?>
<div id="memb" class="row">
<div  class="panel-heading center col-md-offset-3" style="background-color:white; font-size:18px; color:gray; ">
		<div class="col-md-2 col-lg-2">
  
		<p >
		<a  href= "user-area.php?pseudo=<?php echo ucfirst(strtolower(htmlspecialchars($lists['nomMemb'])))?>">
		<img class="img-circle img-responsive" src="assets/images/avatars/user/<?php echo $lists['photo']; ?>" width="50px" height="50px"/> 
		
		</a></p>
		</div>
	
	<span class="col-md-4 col-lg-4">   
        
		
		<a href="user-area.php?pseudo=<?php echo ucfirst(strtolower(htmlspecialchars($lists['nomMemb'])));?>" name="oui"><?php echo ucfirst(strtolower(htmlspecialchars($lists['nomMemb']))); ?></a>
		</span>
		

	
  </div></div><hr>
<?php
 }
?>   
  


<!-- /.Language end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->


	<!-- /.modal -->	
	<div class="modal" id="edittof">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier  pull-right" data-dismiss="modal">Close</button>
												<form enctype = "multipart/form-data" action = "scripts/insert-photo.php?form_file=1'?>" method = "post" onsubmit = "Verif_attente('userfile','message_tele')">
        <p>
        <input type = "hidden" name = "chargement" value = "1" />
        
        
        <input id="id-input-file-1" name ="userfile" type = "file" size = "70" />
        <input type = "submit" value = "Envoyez" class="btn btn-success pull-right" style = "margin-left:5px" />
        </p>
        </form>
		
		
		

</div>
<div class="modal-body center">
<!-- /.Language -->

<!-- /.Language end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->

<!-- /.modal -->	
	<div class="modal" id="facebook">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier  pull-right" data-dismiss="modal">Close</button>
<h4 class="modal-title  blue lighter bigger">
												<form method="Post" action="scripts/update-profile.php">
												<input type="hidden" name="code" value="8" >
												<input type="text" name="face" placeholder="Your Facebook Name" >
												<button type="submit" class="btn btn-success" name="">SEND</button>
												
												</form>
											</h4>
</div>
<div class="modal-body center">
<!-- /.Language -->

<p>face</p>
  


<!-- /.Language end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->




<!-- /.modal -->	
	<div class="modal" id="twitter">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier  pull-right" data-dismiss="modal">Close</button>
<h4 class="modal-title  blue lighter bigger">
												<form method="Post" action="scripts/update-profile.php">
												<input type="hidden" name="code" value="7" >
												<input type="text" name="twitter" placeholder="Your Twitter Name" >
												<button type="submit" class="btn btn-success" name="">SEND</button>
												
												</form>
											</h4>
</div>
<div class="modal-body center">
<!-- /.Language -->

<p>Liste</p>
  


<!-- /.Language end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->


<!-- /.modal -->	
	<div class="modal" id="instagram">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier  pull-right" data-dismiss="modal">Close</button>
<h4 class="modal-title  blue lighter bigger">
												<form method="Post" action="scripts/update-profile.php">
												<input type="hidden" name="code" value="6" >
												<input type="text" name="instagram" placeholder="Your Instagram Name" >
												<button type="submit" class="btn btn-success" name="">SEND</button>
												
												</form>
											</h4>
</div>
<div class="modal-body center">
<!-- /.Language -->

<p>Liste</p>
  


<!-- /.Language end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->



<!-- /.modal -->	
	<div class="modal" id="email">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier  pull-right" data-dismiss="modal">Close</button>
<h4 class="modal-title  blue lighter bigger">
												<form method="Post" action="scripts/update-profile.php">
												<input type="hidden" name="code" value="5" >
												<input type="text" name="email" placeholder="Email" >
												<button type="submit" class="btn btn-success" name="">SEND</button>
												
												</form>
											</h4>
</div>
<div class="modal-body center">
<!-- /.Language -->

<p>Liste</p>
  


<!-- /.Language end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->



<!-- /.modal -->	
	<div class="modal" id="Pseudo">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier  pull-right" data-dismiss="modal">Close</button>
<h4 class="modal-title  blue lighter bigger">
												<form method="Post" action="scripts/update-profile.php">
												<input type="hidden" name="code" value="4" >
												<input type="text" name="pseudo" placeholder="Username" >
												<button type="submit" class="btn btn-success" name="">SEND</button>
												
												</form>
											</h4>
</div>
<div class="modal-body center">
<!-- /.Language -->

<p>Pseudo</p>
  


<!-- /.Language end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->


<!-- /.modal -->	
	<div class="modal" id="Fullname">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier  pull-right" data-dismiss="modal">Close</button>
<h4 class="modal-title  blue lighter bigger">
												<form method="Post" action="scripts/update-profile.php">
												<input type="hidden" name="code" value="1" >
												<input type="text" name="nom" placeholder="Name">
												<input type="text" name="prenom" placeholder="Surname" >
												<button type="submit" class="btn btn-success" name="">SEND</button>
												
												</form>
											</h4>
</div>
<div class="modal-body center">
<!-- /.Language -->

<p>Fullname</p>
  


<!-- /.Language end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->

<!-- /.modal -->	
	<div class="modal" id="country">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier  pull-right" data-dismiss="modal">Close</button>
<h4 class="modal-title  blue lighter bigger">
												<form method="Post" action="scripts/update-profile.php">
												<input type="hidden" name="code" value="2" >
												<select name="pays">
<option value="Afghanistan">Afghanistan</option>
<option value="Afrique_du_Sud">Afrique du Sud</option>
<option value="Albanie">Albanie</option>
<option value="Algerie">Algérie</option>
<option value="Allemagne">Allemagne</option>
<option value="Andorre">Andorre</option>
<option value="Angola">Angola</option>
<option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
<option value="Arabie_saoudite">Arabie saoudite</option>
<option value="Argentine">Argentine</option>
<option value="Armenie">Arménie</option>
<option value="Australie">Australie</option>
<option value="Autriche">Autriche</option>
<option value="Azerbaidjan">Azerbaïdjan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrein">Bahreïn</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbade">Barbade</option>
<option value="Belau">Belau</option>
<option value="Belgique">Belgique</option>
<option value="Belize">Belize</option>
<option value="Benin">Bénin</option>
<option value="Bhoutan">Bhoutan</option>
<option value="Bielorussie">Biélorussie</option>
<option value="Birmanie">Birmanie</option>
<option value="Bolivie">Bolivie</option>
<option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
<option value="Botswana">Botswana</option>
<option value="Bresil">Brésil</option>
<option value="Brunei">Brunei</option>
<option value="Bulgarie">Bulgarie</option>
<option value="Burkina">Burkina</option>
<option value="Burundi">Burundi</option>
<option value="Cambodge">Cambodge</option>
<option value="Cameroun">Cameroun</option>
<option value="Canada">Canada</option>
<option value="Cap-Vert">Cap-Vert</option>
<option value="Chili">Chili</option>
<option value="Chine">Chine</option>
<option value="Chypre">Chypre</option>
<option value="Colombie">Colombie</option>
<option value="Comores">Comores</option>
<option value="Congo">Congo</option>
<option value="Cook">Cook</option>
<option value="Coree_du_Nord">Corée du Nord</option>
<option value="Coree_du_Sud">Corée du Sud</option>
<option value="Costa_Rica">Costa Rica</option>
<option value="Cote_Ivoire">Côte d'Ivoire</option>
<option value="Croatie">Croatie</option>
<option value="Cuba">Cuba</option>
<option value="Danemark">Danemark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominique">Dominique</option>
<option value="Egypte">Égypte</option>
<option value="Emirats_arabes_unis">Émirats arabes unis</option>
<option value="Equateur">Équateur</option>
<option value="Erythree">Érythrée</option>
<option value="Espagne">Espagne</option>
<option value="Estonie">Estonie</option>
<option value="Etats-Unis">États-Unis</option>
<option value="Ethiopie">Éthiopie</option>
<option value="Fidji">Fidji</option>
<option value="Finlande">Finlande</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambie">Gambie</option>
<option value="Georgie">Géorgie</option>
<option value="Ghana">Ghana</option>
<option value="Grèce">Grèce</option>
<option value="Grenade">Grenade</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinee">Guinée</option>
<option value="Guinee-Bissao">Guinée-Bissao</option>
<option value="Guinee_equatoriale">Guinée équatoriale</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haïti</option>
<option value="Honduras">Honduras</option>
<option value="Hongrie">Hongrie</option>
<option value="Inde">Inde</option>
<option value="Indonesie">Indonésie</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Irlande">Irlande</option>
<option value="Islande">Islande</option>
<option value="Israël">Israël</option>
<option value="Italie">Italie</option>
<option value="Jamaique">Jamaïque</option>
<option value="Japon">Japon</option>
<option value="Jordanie">Jordanie</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kirghizistan">Kirghizistan</option>
<option value="Kiribati">Kiribati</option>
<option value="Koweit">Koweït</option>
<option value="Laos">Laos</option>
<option value="Lesotho">Lesotho</option>
<option value="Lettonie">Lettonie</option>
<option value="Liban">Liban</option>
<option value="Liberia">Liberia</option>
<option value="Libye">Libye</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lituanie">Lituanie</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macedoine">Macédoine</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaisie">Malaisie</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malte">Malte</option>
<option value="Maroc">Maroc</option>
<option value="Marshall">Marshall</option>
<option value="Maurice">Maurice</option>
<option value="Mauritanie">Mauritanie</option>
<option value="Mexique">Mexique</option>
<option value="Micronesie">Micronésie</option>
<option value="Moldavie">Moldavie</option>
<option value="Monaco">Monaco</option>
<option value="Mongolie">Mongolie</option>
<option value="Mozambique">Mozambique</option>
<option value="Namibie">Namibie</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Népal</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norvège">Norvège</option>
<option value="Nouvelle-Zelande">Nouvelle-Zélande</option>
<option value="Oman">Oman</option>
<option value="Ouganda">Ouganda</option>
<option value="Ouzbekistan">Ouzbékistan</option>
<option value="Pakistan">Pakistan</option>
<option value="Panama">Panama</option>
<option value="Papouasie-Nouvelle_Guinee">Papouasie - Nouvelle Guinée</option>
<option value="Paraguay">Paraguay</option>
<option value="Pays-Bas">Pays-Bas</option>
<option value="Perou">Pérou</option>
<option value="Philippines">Philippines</option>
<option value="Pologne">Pologne</option>
<option value="Portugal">Portugal</option>
<option value="Qatar">Qatar</option>
<option value="Republique_centrafricaine">République centrafricaine</option>
<option value="Republique_dominicaine">République dominicaine</option>
<option value="Republique_tcheque">République tchèque</option>
<option value="Roumanie">Roumanie</option>
<option value="Royaume-Uni">Royaume-Uni</option>
<option value="Russie">Russie</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint-Christophe-et-Nieves">Saint-Christophe-et-Niévès</option>
<option value="Sainte-Lucie">Sainte-Lucie</option>
<option value="Saint-Marin">Saint-Marin </option>
<option value="Saint-Siège">Saint-Siège, ou leVatican</option>
<option value="Saint-Vincent-et-les_Grenadines">Saint-Vincent-et-les Grenadines</option>
<option value="Salomon">Salomon</option>
<option value="Salvador">Salvador</option>
<option value="Samoa_occidentales">Samoa occidentales</option>
<option value="Sao_Tome-et-Principe">Sao Tomé-et-Principe</option>
<option value="Senegal">Sénégal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra_Leone">Sierra Leone</option>
<option value="Singapour">Singapour</option>
<option value="Slovaquie">Slovaquie</option>
<option value="Slovenie">Slovénie</option>
<option value="Somalie">Somalie</option>
<option value="Soudan">Soudan</option>
<option value="Sri_Lanka">Sri Lanka</option>
<option value="Sued">Suède</option>
<option value="Suisse">Suisse</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Syrie">Syrie</option>
<option value="Tadjikistan">Tadjikistan</option>
<option value="Tanzanie">Tanzanie</option>
<option value="Tchad">Tchad</option>
<option value="Thailande">Thaïlande</option>
<option value="Togo">Togo</option>
<option value="Tonga">Tonga</option>
<option value="Trinite-et-Tobago">Trinité-et-Tobago</option>
<option value="Tunisie">Tunisie</option>
<option value="Turkmenistan">Turkménistan</option>
<option value="Turquie">Turquie</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Ukraine">Ukraine</option>
<option value="Uruguay">Uruguay</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet_Nam">Viêt Nam</option>
<option value="Yemen">Yémen</option>
<option value="Yougoslavie">Yougoslavie</option>
<option value="Zaire">Zaïre</option>
<option value="Zambie">Zambie</option>
<option value="Zimbabwe">Zimbabwe</option>
</select><button type="submit" class="btn btn-success" name="">SEND</button>
												
												</form>
											</h4>
</div>
<div class="modal-body center">
<!-- /.Language -->

<p>Country</p>
  


<!-- /.Language end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->


<!-- /.modal -->	
	<div class="modal" id="career">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-danger btn-minier  pull-right" data-dismiss="modal">Close</button>
<h4 class="modal-title  blue lighter bigger">
												<form method="Post" action="scripts/update-profile.php">
												<input type="hidden" name="code" value="3" >
												<input type="text" name="career" placeholder="Your career" >
												<button type="submit" class="btn btn-success" name="">SEND</button>
												
												</form>
											</h4>
</div>
<div class="modal-body center">
<!-- /.Language -->

<p>Career</p>
  


<!-- /.Language end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->
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
 
		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.colorbox.min.js"></script>

		

  
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		<script type="text/javascript">
		
		jQuery(function($) {
		
		
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'Click here to Add picture ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false, //| true | large
					whitelist:'gif|png|jpg|jpeg',
					blacklist:'exe|php'
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
})
		</script>
   <script type="text/javascript">
		
		jQuery(function($) {
		$('[data-rel=tooltip]').tooltip();
				$('[data-rel=popover]').popover({html:true});
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
					;
			
			});
		</script>
		<link rel="stylesheet" href="colorbox/colorbox.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="colorbox/jquery.colorbox.js"></script>
			<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3',  width:"80%", height:"80%",slideshow:true,slideshowAuto:false,scrolled:false});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
   
		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		

		<!-- inline scripts related to this page -->
	</body>
</html>
