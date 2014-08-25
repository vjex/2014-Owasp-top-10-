

<? include ('top.php'); ?>
<? include ('connection.php'); ?>
<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
<div class="main_top">
	<h2 class="style">our products</h2>
</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
	

<div class="top_main">
		<h2>Details </h2>
		<div class="clear"></div>
	</div>
	
<?php
$category=$_GET['category'];
?>

<?php

$sql="SELECT product_name, product_price FROM products WHERE category='$category'";

$result=mysql_query($sql);

echo "<table><tr><td><b>Description</b></td><td><b>Price (INR)</b></td></tr>";

while($rows = mysql_fetch_array($result))
  {
  echo "<tr><td>" . $rows['product_name'] . " </td><td> " . $rows['product_price'] . "</td></tr>";
  }

echo "</table>";

// $rows=mysql_fetch_array($result);
ob_end_flush();
?>

<div class="top_main">
		<h2>new arrivals on fooseshoes</h2>
		<div class="clear"></div>
	</div>

	<!-- start grids_of_3 -->
	<div class="grids_of_3">
		<div class="grid1_of_3">
			<a href="#">
				<img src="images/pic1.jpg" alt="">
				<h3>even &amp; odd</h3>
				<span class="price">$245,99</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="#">
				<img src="images/pic2.jpg" alt="">
				<h3>buffalo decollete</h3>
				<span class="price">$185,99</span>
				<span class="price1 bg">on sale</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="#">
				<img src="images/pic3.jpg" alt="">
				<h3>even &amp; odd</h3>
				<span class="price">$165,99</span>
			</a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="top_main">
		<h2>best sellers of the month</h2>
		<div class="clear"></div>
	</div>
	<!-- start grids_of_3 -->
	<div class="grids_of_3">
		<div class="grid1_of_3">
			<a href="#">
				<img src="images/pic4.jpg" alt="">
				<h3>buffalo decollete</h3>
				<span class="price">$199,99</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="#">
				<img src="images/pic5.jpg" alt="">
				<h3>even &amp; odd</h3>
				<span class="price">$225,99</span>
			</a>
		</div>
		<div class="grid1_of_3">
			<a href="#">
				<img src="images/pic6.jpg" alt="">
				<h3>buffalo decollete</h3>
				<span class="price">$195,99</span>
				<span class="price1 bg1">out of stock</span>
			</a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<!-- start grids_of_2 -->
	<div class="grids_of_2">
		<div class="grid1_of_2">
			<div class="span1_of_2">
				<h2>free shipping</h2>
				<p>If your order is $35 or more, you may qualify for free shipping. With free shipping, your order will be delivered 5-8 business days after all of your items are available to ship, including pre-order items. For more information on how to qualify, go to About Free Shipping by Foosesshoes. </p>
			</div>
			<div class="span1_of_2">
				<h2>testimonials</h2>
				<p>Our goal is to provide the best Experience and expert customer support in the Online Shopping industry. Many of our clients have given us permission to publish their feedback and testimonials on our website, and we're thrilled with what they have to say[...]</p>
			</div>
		</div>
		<div class="grid1_of_2 bg">
			<h2>blog news</h2>
			<div class="grid_date">
				<div class="date1"> 
					<h4>apr 01</h4>
				</div>
				<div class="date_text">
					<h4><a href="#"> </a></h4>
					<p>I'm always impressed about how easy it is to add new items and make changes to our online store. The functionality is robust and intuitive.</p> 
				</div>
				<div class="clear"></div>
			</div>
			<div class="grid_date">
				<div class="date1"> 
					<h4>feb 01</h4>
				</div>
				<div class="date_text">
					<h4><a href="#"> </a></h4>
					<p>The online store is very easy to navigate and manage. So much so that we are able to delegate setup and support tasks to individuals without any technology background.</p> 
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>
<!-- start footer -->
<!-- start footer -->
<?php


include('bottom.php');

?>