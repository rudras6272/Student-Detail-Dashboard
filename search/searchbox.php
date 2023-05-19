<!DOCTYPE html>
<html>
<head>
  <title>Search Bar</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <form action="" method="GET">
    <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" placeholder="Look For The Student...">
    <button type="submit">Search</button>
  </form>
  <?php
	  $con=mysqli_connect("localhost","root","","test") ;
	  if(isset($_GET['search'])){
		$filtervalues =$_GET['search'] ;
		$query= "SELECT * FROM info WHERE Name LIKE '%$filtervalues%' OR Uid LIKE '%$filtervalues%'" ;
		$query_run= mysqli_query($con ,$query) ;
        $fetch=mysqli_fetch_assoc($query_run) ;
		if(mysqli_num_rows($query_run)>0){
			session_start() ;
			$_SESSION['user_id']=$filtervalues;
			header("Location: ../main/index.php") ;
		}
		else{
			echo '<script>alert("Invalid Information !!")</script>';
		}
	  }
	?>
</body>
</html>

  