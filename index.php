<?php
    require("includes/common.php");
    ?>
<!DOCTYPE html>
<html lang="en">
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
    <?php
    if (isset($_SESSION['email'])) {
 header('products.php');
}?>
    <div class="content">
    <div id="banner_image">
        <div class="container">
            <center>
            <div id="banner_content">
                <h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands</p>
            <a href="products.html" class="btn btn-danger btn-lg active">Shop now</a>
            
            </div>
            </center>
        </div>
       
        </div>
        
    <div class="container">
        <div class="items">
    <a href="#" >
    <img src="camera.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h2>Cameras</h2>
    <p>Choose among the best available in the world.</p>
    </div>
    </a>
        
        </div>
        <div class="items">
    <a href="#" >
    <img src="watch.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h2>Watches</h2>
    <p>original watches from the best brands.</p>
    </div>
    </a>
        
        </div>
        <div class="items">
    <a href="#" >
    <img src="shirt.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h2>Shirts</h2>
    <p>our exquisite collections of shirts.</p>
    </div>
    </a>
        
        </div>
        </div>
    
    
    </div>
    <?php
    require("includes/footer.php");
    ?>
    </body>
</html>
