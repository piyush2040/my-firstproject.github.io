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
    require("includes/check-if-added.php");
    ?>
    <div class="container">
    <div class="jumbotron">
        <h1>“Welcome to our Lifestyle Store!</h1>
        <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
have all in one place</p>
        <div class="row">
        <div class="s col-md-3 col-sm-6">
            
    <img src="cam4.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h3>cannon EOS</h3>
    <p>Price:<i class="fa fa-rupee">Rs. 36000.00</i></p>
        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
    </div>
            
            </div>
            <div class="s col-md-3 col-sm-6">
            
    <img src="cam1.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h3>Sony DSLR</h3>
        <p>Price:<i class="fa fa-rupee">Rs. 40000.00</i></p>
        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
    </div>
    
            
            </div>
            <div class="s col-md-3 col-sm-6">
    <img src="cam2.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h3>Sony DSLR</h3>
        <p>Price:<i class="fa fa-rupee">Rs. 50000.00</i></p>
        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
    </div>
            
            </div>
            <div class="s col-md-3 col-sm-6">
    <img src="cam4.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h3>Olympus DSLR</h3>
        <p>Price:<i class="fa fa-rupee">Rs. 80000.00</i></p>
        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
    </div>
            
            </div>
        </div>
        <div class="row">
        <div class="s col-md-3 col-sm-6">
            
    <img src="watch1.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h3>Titan Model#301</h3>
        <p>Price:<i class="fa fa-rupee">Rs. 13000.00</i></p>
        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
    </div>
            
            </div>
            <div class="s col-md-3 col-sm-6">
            
    <img src="watch2.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h3>Titan Model#201</h3>
        <p>Price:<i class="fa fa-rupee">Rs. 3000.00</i></p>
        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
    </div>
    
            
            </div>
            <div class="s col-md-3 col-sm-6">
            
    <img src="watch3.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h3>HMT Milan</h3>
        <p>Price:<i class="fa fa-rupee">Rs. 8000.00</i></p>
        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
    </div>
    
            
            </div>
            <div class="s col-md-3 col-sm-6">
            
    <img src="watch4.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h3>Faber Luba#111</h3>
        <p>Price:<i class="fa fa-rupee">Rs. 18000.00</i></p>
        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
    </div>
    
            
            </div>
        </div>
        <div class="row">
        <div class="s col-md-3 col-sm-6">
    <img src="shirt.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h3>H&W</h3>
        <p>Price:<i class="fa fa-rupee">Rs.800.00</i></p>
        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
    </div>
            
            </div>
            <div class="s col-md-3 col-sm-6">
    <img src="shirt1.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h3>Luis Phil</h3>
        <p>Price:<i class="fa fa-rupee">Rs.1000.00</i></p>
        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
    </div>
            
            </div>
            <div class="s col-md-3 col-sm-6">
    <img src="shirt2.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h3>John Zok</h3>
        <p>Price:<i class="fa fa-rupee">Rs.1500.00</i></p>
        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
    </div>
            
            </div>
            <div class="s col-md-3 col-sm-6">
    <img src="shirt3.jpg" alt="" class="thumbnail">
    <div class="caption">
    <h3>Jhalsani</h3>
        <p>Price:<i class="fa fa-rupee">Rs.1300.00</i></p>
        <?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" type="button" class="btn btn-primary">Add to cart</a>
							<?php }else{ ?>
								<?php if(check_if_added_to_cart(1)){ ?>
									<a href="#" class="btn btn-success" disabled>Added to cart</a>
								<?php }else{ ?>
										<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
									<?php }
								} ?>
    </div>
            
            </div>
        </div>
        
        </div>
    
    </div>
    <?php
      require("includes/footer.php");
?>
    </body>
</html>