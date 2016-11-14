<?php

session_start();
require ('scripts/config.php');
include ("scripts/pagination1.php");

	 	  
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
     <nav class="navbar navbar-custom-gallery navbar-fixed-top" role="navigation">
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
		
		
        <!-- /.container -->
		
    </nav>

 
</br>

<div class=" center gallery" >
							
								<?php echo 'MY Favorites';?> 
								<br>
				<?php if (isset($_SESSION['resultat_telecharg']))

			{
				echo  '<span classe="progress" style="color:yellow; font-size:15px; ">'.htmlspecialchars($_SESSION['resultat_telecharg']).'</span>';
					unset($_SESSION['resultat_telecharg'])
				
			;}?> 
 
				</div>  

</br>

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
    
<div class="container ">

  <?php
  
$result =$bdd->query("SELECT * FROM photo ");
	
	$row=$result->fetch();	

$i=1;
while($dnn =$dem->fetch())
{
?>	
<script type="text/javascript">
		function request<?php echo$i;?>(callback) {
    var xhr = getXMLHttpRequest();
     
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            
			callback(xhr.responseText);
            
        }
    };
 var action<?php echo$i;?>  = encodeURIComponent('new');
   xhr.open("GET", "./free001/get-like.php?action=" + action<?php echo$i;?>, true);
    xhr.send(null);
     
    
}
 
function readData<?php echo$i;?>(sData) {    
    if (sData.length > 0) {
	document.getElementById('lik').innerHTML = sData;
	}
	
}
setInterval('request<?php echo$i;?>(readData<?php echo$i;?>)',500);



function post<?php echo$i;?>() {
  var xhr = getXMLHttpRequest();
     
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
            callback(xhr.responseText);
         
        }
    };
    var msg<?php echo$i;?> = encodeURIComponent(document.getElementById("idPhoto<?php echo$i;?>").value);
      xhr.open("GET", "./free001/like.php?idPhoto=" + msg<?php echo$i;?>, true);
      xhr.send(null);
	  
      document.getElementById("idPhoto<?php echo$i;?>").value = '';
	  
      }
        
		
		
		
		</script>
	<?php
	$date = $dnn['timePost'];?>

<div class="row">
   
<div class="">	 


 	
 <section class=" col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6   " >

	  

<div class="panel panel ">
  <div class="panel-heading">
  <?php echo '<a  class="media-left" href= "user-area.php?pseudo='.ucfirst(strtolower(htmlspecialchars($dnn['nomMemb']))).'"> <img src="assets/images/avatars/user/'. $dnn["photo"].'" class="media-object img-circle" width="30px" id="tof3" />
</a>';?>
      <div class="media-body" >
      <div class="media-heading">
	  
        <small class="pull-right">
		
		   <?php  
		   
		    $days = floor($dnn['timespend'] / (60 * 60 * 24));
			$remainder = $dnn['timespend'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
			
			if($days > 0)
			echo date('F d Y', $dnn['timespend']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few secs ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' min ago';
			elseif($days == 0 && $hours > 0)
			echo $hours.' hour ago';
			else
			echo "few secs ago";	?>
		   
		   
		
		 </small>
		 
        
		<?php echo '<a   href= "user-area.php?pseudo='.ucfirst(strtolower(htmlspecialchars($dnn['nomMemb']))).'"> '.$dnn["nomMemb"].'</a>';
		
		if ($dnn['verifier']==true)
								{

		?>
		<small>
		
		<span class="ace-icon fa fa-check-circle green" 	> </span></small>
		
		<?php }else{} ?>
		
		
      </div></div></div>
  
	<a href="assets/images/gallery/<?php echo  $dnn['photo_path']; ?>" class="group3" title=" <?php echo  $dnn['title']; ?>" >
	
		
		<img class="media-body-inline-img img-responsive" width="700px" src="assets/images/gallery/<?php echo $dnn['photo_path']; ?>"/>
	</a>
      
  
   
   <h4 class="panel-heading"> <?php echo  $dnn['title']; ?> </h4>
   
<?php if(isset($_SESSION['pseudo']) && ($_SESSION['pseudo'] == ucfirst(strtolower(htmlspecialchars($dnn['Auteur'])))))
 {?>
	
																					
																						<a href="scripts/delete-photo.php?id=<?php echo  $dnn['idPhoto']; ?>" class="tooltip-error pull-right"  title="Delete">
																							<span class="red">
																								<i class="ace-icon fa fa-trash-o bigger-110"></i>
																							</span>
																						</a>
																					 <?php
}
?>
<br>

</div>
</div>


</section>
</div>
<?php
}
?>
<div id="prod_nav" class="text-xs-center">
	<ul class="pagination">
		<li class="<?php if($current == '1'){ echo "disabled";} ?>" ><a href="?p=<?php if($current != '1'){echo $current-1;}else{echo $current;} ?>"><strong> &laquo; </strong> </a></li>
		<?php
			for($i=1;$i<=$pages;$i++)
		{
			if($i== $current ){
				?>
				<li class="active"><a href="?p=<?php echo $i ; ?>"><strong> <?php echo $i ; ?> </strong> </a></li>
				<?php
			}else{
				?>
				<li ><a href="?p=<?php echo $i ; ?>"><strong> <?php echo $i ;?> </strong> </a></li>
				<?php
			}
		}
		?>
		<li class="<?php if($current == $pages){ echo "disabled";} ?>" ><a href="?p=<?php if($current != $pages ){echo $current + 1;}else{echo $current;} ?>"><strong> &raquo; </strong> </a></li>
	</ul>
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

	
	

	
	</div>
 
 
 
 
 
 
 
									</div>

		<!-- basic scripts -->

		<!--[if !IE]> -->
	
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
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
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
		<script type="text/javascript">
		
		jQuery(function($) {
		$('[data-rel=tooltip]').tooltip();
				$('[data-rel=popover]').popover({html:true});
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
			
			});
		</script>
		
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
