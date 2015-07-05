<?php session_start(); ?>
<!DOCTYPE html>
<html>

<!-----------------------------------------------------------------------------
Name:                Program: index.php
Desc:                
                     
                     
Tech. Notes:  		 

                  
IN:               
OUT:              
Written by:          R. Farah
Created:             Sept 1, 2014
Modified:            March 30, 2015
-------------------------------------------------------------------------------->
<?php 
  

	
	// echo "sid = ". $PHPSESSID;

	if (!require_once("includes/headtags.php")) die("'head tags' failed");	?>

	<body>   
		<?php 

		if(!require_once(DOCUMENT_ROOT . "includes/nav.php")) die("include 'nav.php' failed");
		if(!require_once(DOCUMENT_ROOT . 'includes/header.php')) die("include header.php failed"); 
		if(!include_once(DOCUMENT_ROOT . 'includes/facebookSDK.php')) die("include facebookSDK.php failed"); 
		
		?>

		<div class='wrapper'>
			
			<div class='content-left'>        
				<?php  include(DOCUMENT_ROOT . 'includes/leftsidebar.php'); ?>                             
			</div>
			
			<div class='content-main'>
				
				<?php  include(DOCUMENT_ROOT . 'includes/slideShow.php'); ?> 
				
				<div id='slideText' class='margin_10_10'>
					<?php include(DOCUMENT_ROOT . 'includes/defaultLinkcontent.php');?>            
				</div>
				<div class='margin_10_10'> </div>	
				
			</div>           
			
			<div class='content-right'>      
				 <?php include(DOCUMENT_ROOT. 'includes/rightsidebar.php');?>                
			</div>      
			
		</div>    
		<footer>               
			<div class=''>
				<?php include(DOCUMENT_ROOT . 'includes/footer.php');?>                  
			</div>
		</footer>

</body>
</html>