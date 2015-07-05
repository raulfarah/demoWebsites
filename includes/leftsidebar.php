<?php session_start();


    /* links on left side bar	- see the xml file */    

    if ($xml->left_sidebar_content->links ) {            
        echo"<ul>";
        foreach($xml->left_sidebar_content->links->link as $l) {                 
            
            $str = trim($l->heading);           
					
            echo"<li> <a class='pagelinks' href='#' data='$str' xhref='includes/pages.php'> $str </a> </li>";                             
             
        }  
        echo"</ul>";   		
    }      
	
	/* 	 display other contents on the left side bar */	
	if ($xml->left_sidebar_content->article ) {            
        foreach($xml->left_sidebar_content->article as $l) {                 
            ?> 
			<div class='margin_5_5'> 
			    
				<?php 
				$heading  = trim($l->heading);
				echo"<h4>$heading </h4>";
				
				if ($l->image != '') {  
				    $image  = trim($l->image);
					echo '<img src=' . "$image" . "alt='img_missing'" . '/>';		
				}			
				$content  = trim($l->content);
				echo"<p>$content</p>";  	?>
			</div>
             <?php
        }  
    }      

?>