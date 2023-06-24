<?php
//index.php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Koszyk</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="styles.css">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>       
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</head>
	<body class="body">
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
                                <li><a href="example/index.php">O nas</a></li>
                                <li><a href="#">Wyszukiwarka</a></li>
                                <li><a href="historia.html">O historii gier</a></li>
                                <li><a href="memory.html">Gry</a></li>
                            </ul>

                        </div>
            </nav>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>


		<div class="container" >


			
				<div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" hidden>
						<span class="sr-only" type="button" >Menu</span>

						</button>
						
					</div>

					<div class="koszyk">

								<button id="cart-popover" type="button"data-placement="bottom" title="Koszyk">
								<i class="fa fa-cart-plus"></i>
								<span class="total_price" >$ 0.00</span>
								</button>
					</div>
				</div>

			<div id="popover_content_wrapper" class="popover" style="display: none">
				<span id="cart_details"></span>
				<div text-align="right">
					<a href="order_process.php" class="btn btn-primary" id="check_out_cart">
						<span></span> Przejdź do koszyka
					</a>
					<a href="#" class="btn btn-default" id="clear_cart">
						<span class="glyphicon glyphicon-trash"></span> Wyczyść
					</a>
				</div>
			</div>
			
			
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
			<div class="container2">
				<div class="dark">
					<img src="images/BB-Pod.png" class="imageBB">
					<br>
					
					<div class="BB-text">
					<h4 class="text-info">BB-Pod</h4>
					<h4 class="text-danger">$ 230.00</h4>
					<input type="text" name="quantity" id="quantity1" class="form-control" value="1">
					
					<input type="hidden" name="hidden_name" id="name1" value="BB-Pod">
					<input type="hidden" name="hidden_price" id="price1" value="230.00">
					<input type="button" name="add_to_cart" id="1" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart">
					</div>
				</div>

			

				<div class="przedmioty">
					<img src="images/doom-helmet.jpg" class="imageDoom">
					<br>
					<br>
					<br>
					<div class = "doom-text">
					<h4 class="text-info">Doom Helmet</h4>
					<h4 class="text-danger">$ 300.00</h4>
					<input type="text" name="quantity" id="quantity2" class="form-control" value="1">
					
					<input type="hidden" name="hidden_name" id="name2" value="Doom Helmet">
					<input type="hidden" name="hidden_price" id="price2" value="300.00">
					<input type="button" name="add_to_cart" id="2" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart">
					</div>
				</div>

				<div class="dark">
					<img src="images/gogle.jpg" class="image-gogle">
					<br>
					<br>
					<br>
					<br>
					<br>
					<div class="gogle-text">
					<h4 class="text-info">Night vision goggles</h4>
					<h4 class="text-danger">$ 160.00</h4>
					<input type="text" name="quantity" id="quantity3" class="form-control" value="1">
						
					<input type="hidden" name="hidden_name" id="name3" value="Goggles">
					<input type="hidden" name="hidden_price" id="price3" value="160.00">
					<input type="button" name="add_to_cart" id="3" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart">
					</div>
				</div>

				<div class="przedmioty">
					<img src="images/pipboy.jpg" class="image-pip">
					<br>
					<br>
					<br>
					<br>
					<br>
					<h4 class="text-info">Pip Boy</h4>
					<h4 class="text-danger">$ 120.00</h4>
					<input type="text" name="quantity" id="quantity4" class="form-control" value="1">
						
					<input type="hidden" name="hidden_name" id="name4" value="Pip Boy">
					<input type="hidden" name="hidden_price" id="price4" value="120.00">
					<input type="button" name="add_to_cart" id="4" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart">
				</div> 

				<div class="dark">
					<img src="images/dead-island.jpg" class="image-dead">
					<br>
					<br>
					<br>
					<br>
					<br>
					<h4 class="text-info">Dead Island Collector's</h4>
					<h4 class="text-danger">$ 90.00</h4>
					<input type="text" name="quantity" id="quantity5" class="form-control" value="1">
						
					<input type="hidden" name="hidden_name" id="name5" value="Dead Island Collector's">
					<input type="hidden" name="hidden_price" id="price5" value="90.00">
					<input type="button" name="add_to_cart" id="5" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart">
				</div>
				<div class="przedmioty">
					<img src="images/mass-effect.jpg" class="image-łazik">
					<br>
					<br>
					<br>
					<br>
					<br>
					<h4 class="text-info">Nomad ND1</h4>
					<h4 class="text-danger">$ 190.00</h4>
					<input type="text" name="quantity" id="quantity6" class="form-control" value="1">
						
					<input type="hidden" name="hidden_name" id="name6" value="Nomad ND1">
					<input type="hidden" name="hidden_price" id="price6" value="190.00">
					<input type="button" name="add_to_cart" id="6" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart">
				</div> 
				
			</div>



		
			

			
				<br />
				<br />
				<br />
				<br/>
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
<script src="script.js"></script> 
<footer>Kraina Grzybów</footer>
</body>
</html>