<?php 
include('top.php');
?>

<!----start-images-slider---->
		<div class="images-slider">
			<!-- start slider -->
		    <div id="fwslider">
		        <div class="slider_container">
		            <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg.jpg" alt=""/>
		                <!-- /Slide image -->
		                <!-- Texts container -->
		                <div class="slide_content">
		                    <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <h4 class="title"><i class="bg"></i>See the best of Sumertime <span class="hide"></span></h4>
		                        <h5 class="title1"><i class="bg"></i>Rooms starting from <span class="hide" >120$</span></h5>
		                        <!-- /Text title -->
		                    </div>
		                </div>
		                 <!-- /Texts container -->
		            </div>
		            <!-- /Duplicate to create more slides -->
		            <div class="slide">
		                <img src="images/slider-bg.jpg" alt=""/>
		                <div class="slide_content">
		                     <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <h4 class="title"><i class="bg"></i>Wifi is not Luxury<span class="hide">, Its Necessity .</span></h4>
		                        <h5 class="title1"><i class="bg"></i>Free Wifi ..<span class="hide">Unlimited</span> </h5>
		                        <!-- /Text title -->
		                    </div>
		                </div>
		            </div>
		            <!--/slide -->
		        </div>
		        <div class="timers"> </div>
		        <div class="slidePrev"><span> </span></div>
		        <div class="slideNext"><span> </span></div>
		    </div>
		    <!--/slider -->
		</div>
<!--start main -->
<div class="main_bg">
<div class="wrap">
	<div class="online_reservation">
	<div class="b_room">
		<div class="booking_room">
			<h4>book a room online</h4>
			<p>Now you can book your holiday online , Just fill the details, and we will touch with you soon </p>
		</div>
		<div class="reservation">
			<ul>
				<li class="span1_of_1">
					<h5>type of room:</h5>
					<!----------start section_room----------->
					<div class="section_room">
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Select a type of room</option>
				            <option value="null">Suite room</option>         
				            <option value="AX">Single room</option>
							<option value="AX">Double room</option>
		        		</select>
					</div>	
				</li>
				<li  class="span1_of_1 left">
					<h5>check-in-date:</h5>
					<div class="book_date">
						<form>
							<input class="date" id="datepicker" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						</form>

					</div>					
				</li>
				<li  class="span1_of_1 left">
					<h5>check-out-date:</h5>
					<div class="book_date">
						<form>
							<input class="date" id="datepicker1" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						</form>
					</div>		
				</li>
				<li class="span1_of_2 left">
					<h5>Adults:</h5>
					<!----------start section_room----------->
					<div class="section_room">
						<select id="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">1</option>
				            <option value="null">2</option>         
				            <option value="AX">3</option>
							<option value="AX">4</option>
		        		</select>
					</div>					
				</li>
				<li class="span1_of_3">
					<div class="date_btn">
						<form action="login.php">
							<input type="submit" value="book now" />
						</form>
					</div>
				</li>
				<div class="clear"></div>
			</ul>
		</div>
		<div class="clear"></div>
		</div>
	</div>
	<!--start grids_of_3 -->
	<div class="grids_of_3">
		<div class="grid1_of_3">
			<div class="grid1_of_3_img">
				<a href="details.html">
					<img src="images/pic2.jpg" alt="" />
					<span class="next"> </span>
				</a>
			</div>
			<h4><a href="#">single room<span>120$</span></a></h4>
			<p>
			
			

Even our Standard Single rooms promise something a little special. Modern and luxurious, it’s everything you would expect from a top London hotel.
There are 28 Standard Single rooms at The Grosvenor. They all offer a spacious and quiet retreat with luxury comforts, including sumptuous Hypnos bed and Bose iPod docking station.
 

			
			
			
			</p>
		</div>
		<div class="grid1_of_3">
			<div class="grid1_of_3_img">
				<a href="details.html">
					<img src="images/pic1.jpg" alt="" />
					<span class="next"> </span>
				</a>
			</div>
			<h4><a href="#">double room<span>180$</span></a></h4>
			<p> A Standard Double room at the Grosvenor Hotel provides the perfect base for experiencing London, whether you’re visiting for business or pleasure. It also promises something a little special. 
Modern and luxurious, it’s everything you would expect from a luxury 4-star hotel. All our 162 Standard Double rooms offer a spacious and quiet retreat with exceptional comforts, including sumptuous Hypnos beds and Bose iPod docking station.
 </p>
		</div>
		<div class="grid1_of_3">
			<div class="grid1_of_3_img">
				<a href="details.html">
					<img src="images/pic3.jpg" alt="" />
					<span class="next"> </span>
				</a>
			</div>
			<h4><a href="#">suite room<span>210$</span></a></h4>
			<p>If you’re planning a longer stay in London and want to experience the height of luxury, we recommend our six beautiful Suites. Welcoming, reviving features include complimentary bathrobes and slippers, an en-suite bathroom with two-person roll-top baths, rainfall showers and Elemis toiletries. </p>
		</div>
		<div class="clear"></div>
	</div>	
</div>
</div>		
<!--start main -->
<?php 
include('bottom.php');
?>