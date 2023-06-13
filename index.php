<?php
//index.php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Koszyk</title>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="styles.css">
		<style>
		.popover
		{
		    width: 100%;
		    max-width: 800px;
		}
		.navbar-fixed {
            position: fixed;
            top: 0;
            width: 100%;
        }
		 #display_item {
            margin-top: 50px; /* Adjust the margin-top value as needed */
        }
		</style>
	</head>
	<body class="strona">
		<nav class="navbar">
                    <div class="brand-title"></div>
                    <ul class="topnav">
                        <a href="#" class="toggle-button"> 
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                          </a>
                        <div class="navbar-links">
                            <ul>
                                <img class="gamepad" src="zdj/gameboy-projekt.png" alt="gameboy">
                                <li><a href="Strona Główna.html">Strona Glowna</a></li>
                                <li><a href="koszyk.html">O nas</a></li>
                                <li><a href="#">Wyszukiwarka</a></li>
                                <li><a href="historia.html">O historii gier</a></li>
                                <li><a href="memory.html">Gry</a></li>
                            </ul>

                        </div>
                </nav>
				
		<div class="container" style="position: inherit">
			<br />
			<h3>Koszyk</h3>
			<br />
			
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Menu</span>
						<span class="glyphicon glyphicon-menu-hamburger"></span>
						</button>
						
					</div>
					<div id="navbar-cart" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li>
								<a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
									<span class="glyphicon glyphicon-shopping-cart"></span>
									<span class="badge"></span>
									<span class="total_price">$ 0.00</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			
			
			<div id="popover_content_wrapper" style="display: none">
				<span id="cart_details"></span>
				<div align="right">
					<a href="order_process.php" class="btn btn-primary" id="check_out_cart">
						<span class="glyphicon glyphicon-shopping-cart"></span> Przejdź do koszyka
					</a>
					<a href="#" class="btn btn-default" id="clear_cart">
						<span class="glyphicon glyphicon-trash"></span> Wyczyść
					</a>
				</div>
			</div>
			</nav>
			
			<?php
				if(isset($_SESSION["success_message"]))
				{
					echo '
					<div class="alert alert-success">
					'.$_SESSION["success_message"].'
					</div>
					';
					unset($_SESSION["success_message"]);
				}
				?>

			<div class="przedmioty">
				<div class="col-md-3" style="margin-top:12px;">  
					<div style="border:10px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:450px; text-align="center">
						<img src="images/image-1.jpg" class="img-responsive">
						<br>
						<h4 class="text-info">T-shirt 1</h4>
						<h4 class="text-danger">$ 350.00</h4>
						<input type="text" name="quantity" id="quantity1" class="form-control" value="1">
						
						<input type="hidden" name="hidden_name" id="name1" value="T-shirt 1">
						<input type="hidden" name="hidden_price" id="price1" value="350.00">
						<input type="button" name="add_to_cart" id="1" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart">
					</div>
				</div>
				<div class="col-md-3" style="margin-top:12px;">  
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:450px;" align="center">
						<img src="images/image-1.jpg" class="img-responsive">
						<br>
						<h4 class="text-info">T-shirt 2</h4>
						<h4 class="text-danger">$ 350.00</h4>
						<input type="text" name="quantity" id="quantity1" class="form-control" value="1">
						
						<input type="hidden" name="hidden_name" id="name1" value="T-shirt 1">
						<input type="hidden" name="hidden_price" id="price1" value="350.00">
						<input type="button" name="add_to_cart" id="1" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart">
					</div>
				</div>
			</div>
			

				
				<br />
				<br />
			</div>
		</div>


<script>  
$(document).ready(function(){

	load_product();

	load_cart_data();

	function load_product()
	{
		$.ajax({
			url:"fetch_item.php",
			method:"POST",
			success:function(data)
			{
				$('#display_item').html(data);
			}
		})
	}

	function load_cart_data()
	{
		$.ajax({
			url:"fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);
			}
		})
	}

	$('#cart-popover').popover({
		html : true,
		container : 'body',
		content:function(){
			return $('#popover_content_wrapper').html();
		}
	});

	$(document).on('click', '.add_to_cart', function(){
		var product_id = $(this).attr('id');
		var product_name = $('#name'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var product_quantity = $('#quantity'+product_id).val();
		var action = 'add';
		if(product_quantity > 0)
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					alert("Przedmiot został dodany do koszyka");
				}
			})
		}
		else
		{
			alert("Wpisz ile sztuk chcesz dodać do koszyka");
		}
	});

	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr('id');
		var action = 'remove';
		if(confirm("Na pewno chcesz usunąć ten produkt z koszyka ?"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function(data)
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("Produkt został usunięty");
				}
			})
		}
		else
		{
			return false;
		}
	});

	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("Koszyk został wyczyszczony");
			}
		})
	});
    
});

</script>