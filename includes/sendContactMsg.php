<?php 
	set_include_path($_SERVER['DOCUMENT_ROOT']);
	include_once('../includes/library.php');       

     /* links on left side bar	- see the xml file */
    include_once('../includes/openXML.php');                  	

	if ($xml->business->email ) {
		if ($xml->business->email != ''){
			$to = trim($xml->business->email);
			
		}		
	}	
	
	$subject = "Message from " . $_POST[name];
	
	$aMsg = array(  "to"=>$to,
					"from"=>$_POST[email],
					"subject"=>$subject,
					"message"=>$_POST[msg]					
	            );
	

	    echo "<pre>";
		print_r($aMsg);
		echo "<pre />";  
    sendemail($aMsg);

?>