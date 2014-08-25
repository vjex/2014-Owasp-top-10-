<?php
include('top.php');
?>
<?php
    //Start session
    session_start();
     
    //Check whether the session variable SESS_MEMBER_ID is present or not
    if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) {
    header("location: login.php");
    exit();
    }
    ?>

<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="contact">				
				<div class="contact_left">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color: #242424;text-shadow: 0 1px 0 #ffffff;text-align: left;font-size: 0.7125em;padding: 5px;font-weight: 600;">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						<p>500 Lorem Ipsum Dolor Sit,</p>
						<p>22-56-2-9 Sit Amet, Lorem,</p>
						<p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
				 	 	<p>Email: <a href="mailto:info@mycompany.com">info(at)mycompany.com</a></p>
				   		<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
				   </div>
				</div>				
				<div class="contact_right">
				  <div class="contact-form">
					    
					
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Home Page</title>
    </head>
     
    <body>
    <h3>Welcome, <?php echo $_SESSION["sess_firstname"] ?></h3>
	<br />
	<p>here are the following details about you</p>
	<br /> <div style="background-color:#ffff4d;padding:20px;">
	<?php  
	echo '<p>First Name<h3>'.$_SESSION["sess_firstname"].'</h3></p><hr>' ;
	echo '<p>Last Name<h3>'.$_SESSION["sess_lastname"].'</h3></p><hr>' ;
	echo '<p>City<h3>'.$_SESSION["sess_city"].'</h3></p><hr>' ;
	echo '<p>Phone<h3>'.$_SESSION["sess_phone"].'</h3></p><hr>' ;
	echo '<p>Credit Card no.<h3>'.$_SESSION["sess_credit"].'</h3></p>' ;
	
	?>
	</div>
    </body>
    </html>
               
						
						
						
						
						
				    </div>
  				</div>		
  				<div class="clear"></div>		
		  </div>
	</div>
</div>
</div>







<?php
include('bottom.php');
?>



