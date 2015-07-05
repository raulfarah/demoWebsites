	<?php 
	
	set_include_path(dirname(__FILE__).'/');
    include_once('constants.php');


    $str = $_POST[linkName];
	
 
    /* links on left side bar	- see the xml file */
    require_once(DOCUMENT_ROOT.'includes/openXML.php');                            

    
    if ($xml->left_sidebar_content->links ) {            
        // display the content for the given heading (clicked link)
		$flag = false;
        foreach($xml->left_sidebar_content->links->link as $l) {           
            	
            if ( trim("$l->heading") === trim("$str") ) {
				
				$flag = true;
				
				echo"<h3> $l->heading </h3>";	
				echo"<p>$l->content </p>";	
				
				break;                  				
            } 					
        }  		
    }         

	// this only applies to footer links
	if ($flag == false) {
		if ($xml->footer->links ) {       

			// display the content for the given heading (clicked link)
			foreach($xml->footer->links->link as $l) {         

                $heading = trim("$l->heading");
				if ( $heading === trim($str) ) {				     
               					 
					echo"<h3> $heading </h3>";	
					$content = trim($l->content);
					echo"<p>$content </p>";	
					break;                  				
				} 					
			}  		
		}         
	}				
?>
<script> window.top.scrollTo(0, 0); </script>