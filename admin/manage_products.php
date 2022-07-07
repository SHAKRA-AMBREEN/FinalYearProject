<?php 
include("header.php");
include ("db.php");
?>


  <!-- Mini-extra style to be apply to tables with the dataTable plugin  -->
    <style>
        
		table, th, td {
	text-align: center;

}


    </style>



<script>
$(document).ready(function(){
    
    //Apply the datatables plugin to your table
    $('#myTable').DataTable();
    
});
</script>



	<div class="row" style="margin: 50px">
	<div class="col-md-3"></div>
 <div class="col-md-7">
	
	<h3>Manage Items</h3>
	<hr>
	<br>
		<table id="myTable" class=" table-bordered table-responsive">
		    <thead>
		        <tr>
    		        <th>Serial No.</th>
    		        <th> Name</th>
    		        <th> Price</th>
    		        <th>Company Name</th>
					<th>Profile Image</th>
					<th>Action</th>
				<th>Action</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
					
					<?php
					
					
					$xyz = "select * from Items";
					
					$query = mysqli_query($con, $xyz);
					
					$i = 0;


					$rows=mysqli_num_rows($query);
					
					while($row= mysqli_fetch_array($query))
						
					{
						$i++;


						?>
						<td> <?php echo $i; ?> </td>
						<td> <?php echo $row['title']; ?> </td>
					<td> <?php echo $row['price']; ?> </td>
					<td> <?php echo $row['cat_title']; ?> </td>
				
					
					<td><img src="uploads/<?php echo $row['image']; ?>" class="img-responsive img-thumbnail" style="max-width: 25%;"> </td>

					<td><a href="edit_products.php?edit=<?php echo $row['id'];?>" class="btn btn-primary">Edit</td>
					<td><a href="delete_products.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</td>
					
					
						
					
					
				</tr>
				
				<?php } ?>
		    </tbody>
		</table>
	</div>
</div>