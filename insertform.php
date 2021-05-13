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
    <h1 id="headings" style="color:white;"><strong>Go Ahead! Insert Record</strong></h1>      
</div>
<div class="container">
<form action="insertion.php" method="post">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" required="" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" name="price" class="form-control" required="" placeholder="Enter price">
  </div>
  <div class="form-group">
  <label class="form-group" for="author">Author</label>
    <input type="text" name="author" class="form-control" required="" placeholder="Enter author's name">
  </div>
  <div class="d-flex justify-content-center">
  <button type="submit" class="btn btn-danger" value="insert">Insert</button>
  </div>
</form>
</div>
<!-- </div> -->
<div class="d-flex justify-content-center mt-3">
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
