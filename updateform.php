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
<title>Update Book Records</title>
</head>
<body>
<div class="table-responsive">
<div class="container">
<h1>Update Book Details</h1>
<form action="updation.php" method="post">
<table class="table table-hover table-bordered">
	<thead class="thead-dark">
	<tr>
		<th>Book ID</th>
		<th>Title</th>
		<th>Price</th>
		<th>Author</th>
	</tr>
</thead>
	<?php 
	$i;
	for($i=1;$i<=$row_num;$i++)
	{
		$rows = mysqli_fetch_array($records);

	?>

	<tr>
		<td><?php echo $rows['book_id']; ?>
			<input type="hidden" name="bookid<?php echo $i ?>" value="<?php echo $rows['book_id']; ?>" />
		</td>

		<td><input type="text" value="<?php echo $rows['title']; ?>" name="title<?php echo $i ?>"></td>
		<td><input type="text" value="<?php echo $rows['price']; ?>" name="price<?php echo $i ?>"></td>
		<td><input type="text" value="<?php echo $rows['author']; ?>" name="author<?php echo $i ?>"></td>
	</tr>

	<?php
	}
	?>
</table>
<div class="d-flex justify-content-center">
<button type="submit" class="btn btn-warning">Update</button>
</div>
</form>
</div>
</div>

<div class="d-flex justify-content-center mt-3">
<a href="home.php" class="btn btn-info" role="button">HOME</a>
</div>

<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style=" font-family:'Courier New', Courier, monospace; font-weight: bold;">© 2021 Copyright:
    <a href="https://github.com/atanbhardwaj" style="color: white;"> Atan Bhardwaj</a>
  </div>
  <!-- Copyright -->

</footer>
</body>

</html>
