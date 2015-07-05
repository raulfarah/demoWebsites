$(document).ready(function(){

					
					
					
					
					// ------------------------------------------------------------------- 
					// Load pages selected from navigation 		
					$("a.navPage").click(
						function() { 	
                            // alert("I am Here");
							var page = $(this).attr('xhref');		
							
							$(".content-main").load(page);
							return false;
					});
					// --------------------------------------------------------------------------
					// Load pages selected from left sidebar	
					$("a.pagelinks").click(
						function() { 	
                            var page = $(this).attr('xhref');	
                            var msg = $(this).attr('data');	
                            
                            
                            // ---------------
                            $.post( page, { linkName: msg })
                                .done(function( data ) {

                                $("#slideText").html(data);
								$("div.linkContents").hide();
                            });
                            
                            
                            // -----------------
                            
								
							// alert(msg);
							//$("#slideText").load(page);
							return false;
					});
					
					// -------------------------------------------------------------------------
					
					
					// ----------------------------------------------------------------------
					/* function to display the statusbar */
					function slideNotice(text) {
						$('div#statusBar').html('<h3>' + text + '</h3>').slideDown();
					}
					
					/* function to display the statusbar */
					function slideNoticeDelay(text) {
						$('div#statusBar').html('<h3>' + text + '</h3>').slideDown().delay(2000).slideUp();
					}
					
					
					
					
					
					// ----------------------------------------------------------------------
					
					// animation for the site
					var myVar=setInterval(function(){myTimer()},18000);

						function myTimer()
						{
												
							// $('#AdBox1').fadeOut("slow").delay(3000).fadeIn("slow");

						 }
					
					
					 // ---------------------------------------------------------------------
					 // image slide show (it was not working for 3 browsers until
					 // I added the slideExpr line. worked on IE only without this line
						$("#slideShow").cycle({
						slideExpr: 'img',
						fx: 'scrollHorz',
						speed: 3000,
						timeout: 2000,
						pause: true
						
					  }); 
					  
					 
					
					  
 
	});