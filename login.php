<?php 
if(isset($_SESSION['id'])){
header('location: index.php');
}
?>
<?php
    require("includes/common.php");
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <div class="container" id="ss">
    <div class="col-sm-10 col-sm offset-1">
    <div class="panel panel-primary">
    <div class="panel-heading">
        <h1>LOGIN</h1>
    </div>
        <div class="panel-body">
            <p class="text-warning">Login to make a purchase</p>
        <form method="post" action="login_submit.php">
            <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="email id" required>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="password" placeholder="password" required>
            </div>
            <input type="submit" value="Login" class="btn btn-primary">
        </form>
        </div>
    <div class="panel-footer">
        Don't have an account?<a href="signup.php"> Register</a>
        </div>
    </div>
    </div>
    </div>
    
    
<?php
    require("includes/footer.php");
    ?>
</body>
</html>