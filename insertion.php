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
<div class="jumbotron">
    <h1 id="headings" style="color:white;"><strong>Insertion Log</strong></h1> 
</div>
<h2 style="color: white;"><?php
if($status==1)
		echo "Record Inserted Successfully";
else
	echo "Insertion Failed";
?></h2>
<div class="d-flex justify-content-center mt-3">
<a href="home.php" class="btn btn-info" role="button">HOME</a>
</div>

<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style=" font-family:'Courier New', Courier, monospace; font-size:15px;font-weight: bold; color:white">© 2021 Copyright:
    <a href="https://github.com/atanbhardwaj" style="color: green; font-size: 15px"> Atan Bhardwaj</a>
  </div>
  <!-- Copyright -->

</footer>
</body>
</html>
