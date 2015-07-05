<?php
    // open xml file
	
	set_include_path(dirname(__FILE__).'/');
    include_once('constants.php');

	if( ! $xml = simplexml_load_file(DOCUMENT_ROOT.'xml/configuration_data.xml') ) 
    { 
        echo "Unable to load XML file"; 
        die();
    }     
	
?>