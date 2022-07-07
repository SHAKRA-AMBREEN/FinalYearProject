
<?php include("header.php");
include("db.php");

?>

<div class="container">
 <div class="row">
 	<div class="col-lg-12">
 		<div class="col-md-2"></div>
 <div class="col-md-10">
 	
  <h2>Add Item Details</h2>
  <br>
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email"> Name:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control"  placeholder="Enter Title" name="title" required>
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="email"> Price:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="Enter Total Price" name="price" required>
      </div>
    </div>
	
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Company:</label>
      <div class="col-sm-4">
       
	 <input type="text" class="form-control" placeholder="Enter Company" name="category" required>
	   
      </div>
    </div>
    
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Profile Image:</label>
      <div class="col-sm-4">
        <input type="file" class="form-control" name="image">
      </div>
    </div>
    
    

   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="btn">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>
 </div>
 <?php
if (isset($_POST['btn'])) {
    
    
    $title = $_POST['title'];
    $price = $_POST['price'];
	$category = $_POST['category'];
 
	 $img=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmpname, "uploads/$img");
	
    
    
    
    $xyz = "insert into items (title, price, cat_title, image) values ('$title', '$price', '$category', '$img')";
    
    $sql = mysqli_query ($con, $xyz);
    
    
    if ($sql) {
        
        
        echo "<script> window.alert ('Product Added Successfully') </script>";
    }
    
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
}



?>