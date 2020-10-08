<?php 
if(isset($_SESSION['id'])){
header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lifestyle store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
    <center>
        <h1>Change Password</h1>
        </center>
        <div class="panel-body">
        <form actiom="settings_script.php" method="post">
            <div class="form-group">
            <input type="text" class="form-control" name="Old Password" placeholder="Old Password" required>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="New password" placeholder="New password" required>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="Re-Type New password" placeholder="Re-Type New password" required>
            </div>
            <input type="submit" value="Change" class="btn btn-primary">
        </form>
        </div>
    </div>
    </div>
    <?php
    require("includes/footer.php");
    ?>
    </body>
</html>