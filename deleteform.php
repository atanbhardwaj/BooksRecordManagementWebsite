<?php

$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn, 'bookbd');
$q = "select * from book;";
$records = mysqli_query($conn, $q);
$row_num = mysqli_num_rows($records);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="./css/viewStyle.css"/>
	<title>Delete Book Records</title>
</head>
<body>
<div class="jumbotron">
    <h1 id="headings" style="color:white;"><strong>Delete Book Records</strong></h1>      
    <p id="hp">Select books to clear their records... </p>
</div>
<div class="container">>
	<div class="table-responsive">
<form action="deletion.php" method="post">
<table class="table table-hover table-bordered">
	<thead class="thead-dark">
	<tr>
		<th>Book ID</th>
		<th>Title</th>
		<th>Price</th>
		<th>Author</th>
		<th>Select To Delete</th>
	</tr>
</thead>
	<?php 
	$i;
	for($i=1;$i<=$row_num;$i++)
	{
		$rows = mysqli_fetch_array($records);

	?>

	<tr>
		<td style="color:white;"><?php echo $rows['book_id']; ?></td>
		<td style="color:white;"><?php echo $rows['title']; ?></td>
		<td style="color:white;"><?php echo $rows['price']; ?></td>
		<td style="color:white;"><?php echo $rows['author']; ?></td>
		<td style="color:red;"> <input type="checkbox" value="<?php echo $rows['book_id'];?>" name="checkbox<?php echo $i; ?>"> </td>
	</tr>

	<?php
	}
	?>
	<tr>
		<!-- <td colspan="5"><input type="submit" value="Delete" name=""></td> -->
		<td colspan="5">
		<div class="d-flex justify-content-center">
			<button type="submit" class="btn btn-danger">Delete</button>
			</div>
		</td>
	</tr>
</table>
</form>
</div>
<div class="d-flex justify-content-center">
<a href="home.php" class="btn btn-info" role="button">HOME</a>
</div>
</div>
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style=" font-family:'Courier New', Courier, monospace; font-weight: bold; color:white;">© 2021 Copyright:
    <a href="https://github.com/atanbhardwaj" style="color: green;"> Atan Bhardwaj</a>
  </div>
  <!-- Copyright -->

</footer>
</body>
</html>

