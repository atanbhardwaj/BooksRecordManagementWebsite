<?php
$title = $_POST['title'];
$price = $_POST['price'];
$author = $_POST['author'];

$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn, 'bookbd');
$v = "insert into book (title,price,author) values ('$title',$price, '$author');";
$status = mysqli_query($conn, $v);
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
	<title>Insertion Form</title>
</head>
<body>
<h1>Insertion Log</h1>
<h2><?php
if($status==1)
		echo "Record Inserted";
else
	echo "Insertion Failed";
?></h2>
<h2> Want To Insert Another Record? <h2> 
<div class="d-flex justify-content-center">
<a href="insertionform.php" class="btn btn-danger" role="button">Click Here</a>
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