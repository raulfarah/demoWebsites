<?php 

    set_include_path(dirname(__FILE__).'/');
    include_once('constants.php');
	
    /* - see the xml file */
    
    if ($xml->footer->links->link ) {            
        echo"<ul>";
        foreach($xml->footer->links->link as $l) {                 
            
            $str = trim($l->heading);   
            echo"<li> <a class='pagelinks' href='#' data=' $str' xhref='includes/pages.php'> <h4>$str</h4> </a> </li>";                      
             
        }  
        echo"</ul>";   
    }      
	if ($xml->business->copyrights ) {
		if ($xml->business->copyrights != ''){
			$copyrights  = trim($xml->business->copyrights);
			echo $copyrights;
		}		
	}
	    