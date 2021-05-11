<?php
$size = sizeof($_POST);
// echo "Records".$size;
$records = $size/4;
// echo "\r\nNumber of records".$records;

for($i=1;$i<=$records;$i++)
{
	$index1="bookid".$i;
	$bookid[$i] = $_POST[$index1];
	$index2="title".$i;
	$title[$i] = $_POST[$index2];
	$index3="price".$i;
	$price[$i] = $_POST[$index3];
	$index4="author".$i;
	$author[$i] = $_POST[$index4];
}

$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn,'bookbd');
for($i=1;$i<=$records;$i++)
{
$q = "update book SET title='$title[$i]', price='$price[$i]', author='$author[$i]'
where book_id=$bookid[$i];";
mysqli_query($conn,$q);	
}

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
	<title>Updation</title>
</head>
<body>
<h1>Updation Log</h1>
<h2><?php
		echo "Records Updated";
?></h2>
<div class="d-flex justify-content-center">
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
