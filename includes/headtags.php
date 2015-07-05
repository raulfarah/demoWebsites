<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<meta name="author" content="" />


<?php
    
	set_include_path(dirname(__FILE__).'/');
    include_once('constants.php');
	
	include_once(DOCUMENT_ROOT.'includes/openXML.php');                          

	// echo "DOCUMENT_ROOT = " . DOCUMENT_ROOT;
	

	if ( $xml->business->theme) {   
		$styleSheet = "css/";
		$styleSheet .= $xml->business->theme;
	}
	if ( $xml->business->websiteTitle ) {   
		$title = $xml->business->websiteTitle;
    }
?>


<link rel="stylesheet" href="css/global_styles.css" type="text/css" media="screen"/>
<?php
echo"<link rel='stylesheet' " . "href=" . "$styleSheet" . " type='text/css' media='screen'/>";
?>
<link rel="stylesheet" href='css/animate.css' type="text/css" media="screen"/>



<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>


<script type="text/javascript" src="js/jquery.cookie.js"></script> 


<script type="text/javascript" src="js/custom.js"> </script>

<title><?php echo "$title"?></title>

</head>