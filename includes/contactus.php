<?php 	


 ?>

	
	<!-- dynamic page contents show up in here  -->
	
	<div id='slideText' class='padding_0_10 margin_0_10'>  	</div>
	
	<div class='linkContents'>                     <!-- id needed by js to hide the div -->
		<?php
		
		set_include_path(dirname(__FILE__).'/');
        include_once('constants.php');
		
		/* - see the xml file */
		require_once(DOCUMENT_ROOT . 'includes/openXML.php');                          
		
		if ($xml->pages->contactus->paragraph ) {            
			
			foreach($xml->pages->contactus->paragraph as $l) {                 
				
				$heading = $l->heading;
				$content = $l->content;
				
				?>				
				<div class='contactUs margin_5_10 padding_0_10'>  
					<h3> <?php echo $heading ?> </h3>
					<p> <?php echo $content ?> </p>
				</div>			
				<?php
			}          
		}      	
		?>	
		<div class='contactUs margin_5_10 padding_0_10'>              
			<div class='contactForm'>
				<form action='includes/sendcontactmsg.php' method='post' autocomplete='on'>
					<div><label>Name:</label><input type='text' name='name'></input></div>
					<div><label>Email:</label><input type='email' name='email' required placeholder='Enter a valid email address' ></input></div>
					<div><label>Message:</label><textarea type='textarea' name='msg' cols='5' rows='5'></textarea></div>
					<div><label></label><input type='submit' value='Send'></input></div>            
				</form>
			</div>
		</div>
	</div>
	
    
    