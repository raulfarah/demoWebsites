<?php session_start(); ?>
	
	<?php

	/* load the contents of the right side bar	- see the xml file */
    include_once('includes/openXML.php');                          


    if ($xml->right_sidebar_content ) {            
        
        foreach($xml->right_sidebar_content->article as $l) {                 
            
			echo"<h3>$l->heading </h3>";
			
			if ($l->image != '') {  
				echo '<img src=' . "$l->image" . "alt='img_missing'" . '/>';		
			}
			
			echo"<p>$l->content </p>";     			
			
        }          
    }      	
    ?>        
        
   
    
  



