<?php
	
	    $aImages = array();
		
		if ($xml->slideshow->images ) {    
			foreach($xml->slideshow->images as $l) {          				
				
				if ($l->image != '') {  
					array_push($aImages, "$l->image");					 
			    }  	
		    }
		}	
        		
		shuffle($aImages);
		
		echo"<div id='slideShow'>";				
			foreach ($aImages as $i => $image){
				echo"<img src='images/$image' alt='$image'>";                                          
			}	 
		echo"</div>";  
				
?>  