<?php include ('header.php');

 ?>

<div class="container">
	<div class="row">
    <div class="col-lg-12">
    <center><h2>Car Accessories</h2></center>
   </div></div></div>
   <br><br>

   
   
<div class="container">
<div class="row">

<?php
		
		$xyz= "select * from items";
		
		$sql = mysqli_query($con, $xyz);
		
		while ($rows= mysqli_fetch_array($sql)) {
			$id       	= $rows['id'];
			$name		= $rows['title'];
			$price		= $rows['price'];
			$img		= $rows['image'];
		
		?>


<div class="col-md-3" style="margin-bottom:50px">
	<figure class="card card-product" style="    border: 1px solid !important; background-color: #cccccc57 !important; border-radius: 10px !important;">
		<div class="img-wrap"> 
			<img src="admin/uploads/<?php echo $img; ?>">
		</div>
		<figcaption class="info-wrap">
			<h4 class="title text-dots" align="center"><?php echo $name; ?></h4>
			<h4 class="title text-dots" align="center">Rs. <?php echo $price; ?></h4>
	
		</figcaption>
	</figure> <!-- card // -->
</div> <!-- col // -->

		<?php } ?>

</div> <!-- row.// -->


</div> 
<!--container end-->


<br>
<br>
<br>






<?php include('footer.php'); ?>