<?php

session_start();
require ('scripts/config.php');

	 	  
if (isset($_SESSION['pseudo']))
								{

							 $query = $bdd->query("	SELECT * FROM profile where nomMemb='".$_SESSION['pseudo']."'")->fetch(); 
	}
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

    <!-- Intro Header -->
   

<br><br><br>
 <div class="page-header shop center">
							
								<?php echo $L65 ;?>
								<span class="glyphicon glyphicon-shopping-cart"></span>
									</div> 
<br>						
<div class="container ">



    
 <div class="row ">

    <div class="col-sm-3 col-lg-3 col-md-3">
        <div class="thumbnail ">
            <img src="av/avatar1.png" alt="">
            <div class="ratings">
                <p class="pull-right"><button class="btn btn-primary btn-minier   "><?php echo $L67 ;?></button></p>
                <p>
                    <span class="glyphicon glyphicon-star yellow"><blink class="label label-success "><?php echo $L66 ;?> </blink></span>

                </p>
            </div>
            &nbsp;&nbsp;&nbsp;
        </div>
    </div>

    <div class="col-sm-3 col-lg-3 col-md-3">
        <div class="thumbnail ">
            <img src="av/avatar2.png" alt="">
            <div class="ratings">
                <p class="pull-right"><button class="btn btn-primary btn-minier   "><?php echo $L67 ;?></button></p>
                <p>
                    <span class="glyphicon glyphicon-star yellow"><blink class="label label-success "><?php echo $L66 ;?> </blink></span>

                </p>
            </div>
            &nbsp;&nbsp;&nbsp;
        </div>
    </div>

    <div class="col-sm-3 col-lg-3 col-md-3">
        <div class="thumbnail ">
            <img src="av/avatar3.png" alt="">
             <div class="ratings">
                <p class="pull-right"><button class="btn btn-primary btn-minier   ">Buy Now</button></p>
                <p>
                    <span class="glyphicon glyphicon-star yellow"><blink class="label label-success ">AVAILABLE </blink></span>

                </p>
            </div>
            &nbsp;&nbsp;&nbsp;
        </div>
    </div>

    <div class="col-sm-3 col-lg-3 col-md-3">
        <div class="thumbnail ">
            <img src="av/avatar4.png" alt="">
           <div class="ratings">
                <p class="pull-right"><button class="btn btn-primary btn-minier   "><?php echo $L66 ;?></button></p>
                <p>
                    <span class="glyphicon glyphicon-star yellow"><blink class="label label-success "><?php echo $L67 ;?> </blink></span>

                </p>
            </div>
            &nbsp;&nbsp;&nbsp;
        </div>
    </div>
</div>

<p class="icon-2x">
       
    </p>

    <div id="boost" class="container">
         <div class="row ">

            <div class="col-sm-3 col-lg-3 col-md-3">
                <div class="thumbnail ">
                    <img src="av/project1.jpg" alt="">
                    <div class="ratings">
                <p class="pull-right"><button class="btn btn-primary btn-minier   "><?php echo $L66 ;?></button></p>
                <p>
                    <span class="glyphicon glyphicon-star yellow"><blink class="label label-success "><?php echo $L67 ;?> </blink></span>

                </p>
            </div>
                    &nbsp;&nbsp;&nbsp;
                </div>
            </div>

	          <div class="col-sm-3 col-lg-3 col-md-3">
                <div class="thumbnail ">
                    <img src="av/project4.jpg" alt="">
                     <div class="ratings">
                <p class="pull-right"><button class="btn btn-primary btn-minier   "><?php echo $L66 ;?></button></p>
                <p>
                    <span class="glyphicon glyphicon-star yellow"><blink class="label label-success "><?php echo $L67 ;?> </blink></span>

                </p>
            </div>
                    &nbsp;&nbsp;&nbsp;
                </div>
            </div>

            <div class="col-sm-3 col-lg-3 col-md-3">
                <div class="thumbnail ">
                    <img src="av/project3.png" alt="">
                    <div class="ratings">
                <p class="pull-right"><button class="btn btn-primary btn-minier   "><?php echo $L66 ;?></button></p>
                <p>
                    <span class="glyphicon glyphicon-star yellow"><blink class="label label-success "><?php echo $L67 ;?> </blink></span>

                </p>
            </div>
                    &nbsp;&nbsp;&nbsp;
                </div>
            </div>
			
			
			<div class="col-sm-3 col-lg-3 col-md-3">
                <div class="thumbnail ">
                    <img src="av/why.jpg" alt="">
                    <div class="ratings">
                <p class="pull-right"><button class="btn btn-primary btn-minier   "><?php echo $L66 ;?></button></p>
                <p>
                    <span class="glyphicon glyphicon-star yellow"><blink class="label label-success "><?php echo $L67 ;?> </blink></span>

                </p>
            </div>
                    &nbsp;&nbsp;&nbsp;
                </div>
            </div>

            
        </div>
</div>
</div>
 
 
 <div class="row ">
   
	
</div>	</div>	

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

	
	
<!-- /.modal -->	
	<div class="modal" id="upload">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button class="btn btn-minier pull-right" data-dismiss="modal">Close</button>
<h4 class="modal-title">UPLOAD PICTURE</h4>
</div>
<div class="modal-body">
<!-- /.afavorite -->


			
	<input multiple="" type="file" id="id-input-file-3" />
				




<!-- /.favorite end -->
</div>
</div>
</div>
</div>
<!-- /.modal end -->	 
	
 
	
	</div>
 
 
 
 
 
 
 
									</div>

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
 
		<!-- page specific plugin scripts -->
		<script src="assets/js/jquery.colorbox.min.js"></script>

		

  
		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
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
				
	var $overflow = '';
	var colorbox_params = {
		rel: 'colorbox',
		reposition:true,
		scalePhotos:true,
		scrolling:false,
		previous:'<i class="ace-icon fa fa-arrow-left"></i>',
		next:'<i class="ace-icon fa fa-arrow-right"></i>',
		close:'&times;',
		current:'{current} of {total}',
		maxWidth:'100%',
		maxHeight:'100%',
		onOpen:function(){
			$overflow = document.body.style.overflow;
			document.body.style.overflow = 'hidden';
		},
		onClosed:function(){
			document.body.style.overflow = $overflow;
		},
		onComplete:function(){
			$.colorbox.resize();
		}
	};

	$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
	$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner red fa-spin'></i>");//let's add a custom loading icon
	
	
	$(document).one('ajaxloadstart.page', function(e) {
		$('#colorbox, #cboxOverlay').remove();
   });
})
		</script>
		<script type="text/javascript">
		
		jQuery(function($) {
		$('[data-rel=tooltip]').tooltip();
				$('[data-rel=popover]').popover({html:true});
			
			});
		</script>


		<!-- inline scripts related to this page -->
<script>
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-shop");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-shop");
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
