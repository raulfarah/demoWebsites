<?php 
	set_include_path($_SERVER['DOCUMENT_ROOT']);
	
	/*  see the xml file */
    
	if ($xml->business->logo ) {                    
        
        $logo = $xml->business->logo;
		$heading = $xml->business->websiteHeading;           
    }     
?>
    <div class="logo content_box animated bounce"> 
        <?php echo $logo; //echo"<img src='../images/$logo' alt='$logo'>";  ?>		
	</div>
	
	<header class="animated bounceInLeft"> 	 					
		<?php echo "$heading"; 	?>					
	</header>