<?php 

    set_include_path(dirname(__FILE__).'/');
    include_once('constants.php');
	
    /* - see the xml file */
    include_once(DOCUMENT_ROOT.'includes/openXML.php');                          

    if ($xml->left_sidebar_content->links->link) {                
            
		$heading = $xml->left_sidebar_content->links->link->heading;
		$content = $xml->left_sidebar_content->links->link->content;
		?>
		<div class=''>  
			<h2> <?php echo $heading ?> </h2>
			<p> <?php echo $content ?> </p>
		</div>
		<?php
    }          
?>