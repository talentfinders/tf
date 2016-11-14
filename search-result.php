<?php

session_start();
require ('scripts/config.php');

	 	  
if (isset($_SESSION['pseudo']))
								{

							 $query = $bdd->query("	SELECT * FROM profile where nomMemb='".$_SESSION['pseudo']."'")->fetch(); 
	}
 $results = $bdd->query("	SELECT * FROM membres,profile where profile.nomMemb = membres.pseudo and membres.pseudo LIKE'".$_GET['search']."%'"); 

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Talentfinders.org</title>

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
     <nav class="navbar navbar-custom-about navbar-fixed-top" role="navigation">
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
		<div class="nav-search minimized">
																	<form class="form-search " method="Get" action="#">
																		<span class="input-icon">
																			<input name="search" type="text" autocomplete="on" class="input-small nav-search-input" placeholder="Search inbox ..." />
																			<i class="ace-icon fa fa-search nav-search-icon"></i>
																		</span>
																	</form>
																</div>
		
        
		
    </nav>

    <!-- Intro Header -->
 <!-- /.script progress-bar -->

<br><br><br>
<div class=" center about" >
							
								Search-Results
								<span class="glyphicon glyphicon-search"></span><br>
					<small style="color:white; font-size:12px;"> you can search character by character</small>
				</div>       
</br>
<div class="container ">
<div class="row">
<div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
      <div class="panel panel " style="">
        
		<div class="panel-body " style="background-color:white;">
          
<div  class="center">
<hr>

<?php   
if(  $results->rowcount() == 0 )
{
?>
    <h3 style="text-align:center; margin:10px 0;">Pas de r&eacute;sultats pour cette recherche</h3>
<?php
}
else
{
    // parcours et affichage des résultats
    while( $post = $results->fetch())
    {
    	if ((isset($_SESSION['pseudo'])) && (ucfirst(strtolower(htmlspecialchars($post['nomMemb'])))==$_SESSION['pseudo']))
								{

								}else{

 ?>
<div id="memb" class="row">
<div  class="panel-heading center col-md-offset-2" style="background-color:white; font-size:18px; color:gray; ">
		<div class="col-md-2 col-lg-2">
  
		<p >
		<a  href= "user-area.php?pseudo=<?php echo ucfirst(strtolower(htmlspecialchars($post['nomMemb'])))?>">
		<img class="img-circle img-responsive" src="assets/images/avatars/user/<?php echo $post['photo']; ?>" width="50px" height="50px"/> 
		
		</a></p>
		</div>
	
	<span class="col-md-4 col-lg-4">   
        
		
		<a href="user-area.php?pseudo=<?php echo ucfirst(strtolower(htmlspecialchars($post['nomMemb'])));?>" name="oui"><?php echo ucfirst(strtolower(htmlspecialchars($post['nomMemb']))); ?></a>
		</span>
		

	
  </div></div></div><hr>   
						<?php }

								}	
										
    }


?>


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
        $(".navbar-fixed-top").addClass("top-nav-about");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-about");
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
$(document).ready( function() {
  // détection de la saisie dans le champ de recherche
  $('#q').keyup( function(){
    $field = $(this);
    $('#results').html(''); // on vide les resultats
    $('#ajax-loader').remove(); // on retire le loader
 
    // on commence à traiter à partir du 2ème caractère saisie
    if( $field.val().length > 1 )
    {
      // on envoie la valeur recherché en GET au fichier de traitement
      $.ajax({
  	type : 'GET', // envoi des données en GET ou POST
	url : 'ajax-search.php' , // url du fichier de traitement
	data : 'q='+$(this).val() , // données à envoyer en  GET ou POST
	beforeSend : function() { // traitements JS à faire AVANT l'envoi
		$field.after('<img src="ajax-loader.gif" alt="loader" id="ajax-loader" />'); // ajout d'un loader pour signifier l'action
	},
	success : function(data){ // traitements JS à faire APRES le retour d'ajax-search.php
		$('#ajax-loader').remove(); // on enleve le loader
		$('#results').html(data); // affichage des résultats dans le bloc
	}
      });
    }		
  });
});


</script>
		

	</body>
</html>
