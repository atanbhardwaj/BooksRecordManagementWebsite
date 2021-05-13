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
<title>Book Records</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="./css/viewStyle.css"/>
</head>
<body>
<div class="jumbotron">
    <h1 id="headings" style="color:white;"><strong>BOOK SHELF</strong></h1>      
    <p id="hp">Here's the list of all the books... </p>
</div>
<div class="table-responsive">
<div class="container">
<table class="table table-hover table-bordered">
	<thead class="thead-dark">
	<tr>
		<th>Book ID</th>
		<th>Title</th>
		<th>Price</th>
		<th>Author</th>
	</tr>
	</thead>
	<tbody>
	<?php 
	$i;
	for($i=0;$i<$row_num;$i++)
	{
		$rows = mysqli_fetch_array($records);

	?>

	<tr>
		<td style="color:white;"><?php echo $rows['book_id']; ?></td>
		<td style="color:white;"><?php echo $rows['title']; ?></td>
		<td style="color:white;"><?php echo $rows['price']; ?></td>
		<td style="color:white;"><?php echo $rows['author']; ?></td>
	</tr>

	<?php
	}
	?>
	</tbody>
</table>
</div>
</div>
<div class="d-flex justify-content-center">
<a href="home.php" class="btn btn-info" role="button">HOME</a>
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
