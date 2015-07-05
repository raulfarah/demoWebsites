<?php 
	set_include_path(dirname(__FILE__).'/');
    include_once('constants.php');


	/* dynamic page contents   */
	?>
		<div id='slideText' class='padding_0_10 margin_0_10'>
			<!--  contents show up in here -->
		</div>
    <?php
	
    /* - see the xml file */
	include_once(DOCUMENT_ROOT.'includes/openXML.php');                            


    if ($xml->pages->aboutus->paragraph ) {            
        
        foreach($xml->pages->aboutus->paragraph as $l) {                 
            
			$heading = $l->heading;
			$content = $l->content;
			?>
			
			<!-- the id linkContents needed by js to hide the div -->
            <div class='linkContents'>         
				<div class='aboutUs margin_5_10 padding_0_10'>  
					<h3> <?php echo $heading ?> </h3>
					<p> <?php echo $content ?> </p>
					<p>'-- * --'</p>
				</div>
			</div>
			<?php             
        }          
    }      	

?>
    

