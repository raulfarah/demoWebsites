<?php 
/***************************************************************************************
Name:           sendemail($Data)
Description:    send an email

IN:			    $aData[to] = "enter desintaion email here";
		        $aData[subject] = "email subject here";		  
                $aData[message] = "your email  body here";
          
OUT:         
Written by:  R. Farah
Created:     Dec. 16, 2012
Modified:
****************************************************************************************/
function sendemail($aData) {
    $aData = sanitize($aData);
    extract($aData);
   
    
   
	if (isset($from)){
		
		$headers  = 'MIME-Version: 1.0' . "\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
		$headers .= "From: $from";

		if (filter_var($from, FILTER_VALIDATE_EMAIL)) {
			
			
			return (mail($to, $subject, $message, $headers));          
				
		} 
		echo"Problem Sending email - Your request, check your input 1823:";
		print_r($aData);
		return false;    
        
    }
  
    
}
/***************************************************************************************
Name:        sanitize()
Description: sanitize user input
                         
In:          array 
OUT:         modified array 
Written by:  R. Farah
Created:     August 28, 2014
Modified:
****************************************************************************************/
function sanitize($aData) {
    
    foreach ($aData as $key => $val) {
		
        $aData[$key] = strip_tags(trim($val) );   
		
	}  
    return $aData;
}

?>