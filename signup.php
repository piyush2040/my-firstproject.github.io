<?php 
if(isset($_SESSION['id'])){
header('location: product.php');
exit;
}
?>
<?php
      require("includes/common.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lifestyle store</title>
    <!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
    <link rel="stylesheet" href="index.css">
</head>
<body>
   <?php
      require("includes/header.php");
?>
    <div class="container" id="ss1">
    <div class="col-sm-10 col-sm offset-1">
    <div class="panel panel-default">
    <div class="panel-heading">
        <h1>signup</h1>
    </div>
        <div class="panel-body">
        <form method="post" action="signup_script.php">
            <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="contact" placeholder="contact" required>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="city" placeholder="city" required>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Address" required>
            </div>
            
            <input type="submit" value="signup" class="btn btn-primary" required>
        </form>
        </div>
    
    </div>
    </div>
    </div>
    
    
<?php
      require("includes/footer.php");
?>
</body>
</html>