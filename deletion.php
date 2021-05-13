<?php
$size = sizeof($_POST);
$j = 1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index = "checkbox".$j;
	if(isset($_POST[$index]))
		$b_id[$i] = $_POST[$index];
	else
		$i--;
}
$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn, 'bookbd');
for($k=1;$k<=$size;$k++)
{
	$q = "delete from book where book_id=".$b_id[$k];
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
	<title>Deletion</title>
</head>
<body>
<div class="jumbotron">
    <h1 id="headings" style="color:white;"><strong>Deletion Log</strong></h1>      
   </div>
<h2 style="color: white;"><?php
		echo $size." Records Deleted Successfully";
?></h2>
<div class="d-flex justify-content-center">
<a href="home.php" class="btn btn-info" role="button">HOME</a>
</div>


<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="font-size:15px; font-family:'Courier New', Courier, monospace; font-weight: bold; color: white;">© 2021 Copyright:
    <a href="https://github.com/atanbhardwaj" style="font-size:15px; color: green;"> Atan Bhardwaj</a>
  </div>
  <!-- Copyright -->

</footer>
</body>
</html>

