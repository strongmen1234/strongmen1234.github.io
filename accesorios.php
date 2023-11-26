<?php

include 'Conex.php';


$sql = $conexion-> prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");



?>

<!DOCTYPE html>
<html>
   <head>


   	<meta charset="UTF-8">
   	<meta  name="viewport" content="width=device-width, initial-scale=1.0">
   	<meta name="viewport" content="width=device-width,initial-scale=1.0">
   <title> ACCESORIOS </title>
   	<link rel="stylesheet" href="css/Elton.css">
   	<link rel="shortcut icon" href="img/F1.png" type="image/x-icon">
   	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
   </head>
   <body>
<div class="PRE">
		<section class="textos-header">
			<h1>Strong Men</h1>
            <h2>BE STRONGER THAN YOUR EXCUSES</h2>
		</section>
		<div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
	</div>
<header>	
<input type="button">	
<h1>Tienda De Accesorios</h1>

<div class="container-icon">
				<div class="container-cart-icon">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						class="icon-cart"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
						/>
					</svg>
					<div class="count-products">
						<span id="contador-productos">0</span>
					</div>
				</div>

				<div class="container-cart-products hidden-cart">
					<div class="row-product hidden">
						<div class="cart-product">
							<div class="info-cart-product">
								<span class="cantidad-producto-carrito"></span>
								<p class="titulo-producto-carrito"></p>
								<span class="precio-producto-carrito">$0</span>
							</div>
							<svg
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke-width="1.5"
								stroke="currentColor"
								class="icon-close"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M6 18L18 6M6 6l12 12"
								/>
							</svg>
						</div>
					</div>

					<div class="cart-total hidden">
						<h3>Total:</h3>
						<span class="total-pagar">$0</span>
					</div>
					<p class="cart-empty"></p>
				</div>
			</div>
</header>
<div>
    <div>
        <form action="funciones.php" method="post" enctype="multipart/form-data">
                    contenido:<input type="text" name="conte" id="conte" /><br>
                    genero:<select name="catego" value="catego" id="catego"><br>    
                         <option>hombre</option>
                        <option>mujer</option>
                        <option>tanque sobietico</option>
            <div class="file-field input field">
                <div class="btn-small amber darken-1">
                    <span>Elige una imagen</span>
                    <input type="file" name="foto" id="foto" onchange="vista_preliminar(event)" value="elige imagen">
                </div>
            </div>
            <div><img src="" alt="" id="img-foto" width="240"></div>
            <div class="input-field">
                <button type="submit" name="btn-agregar" id="btn-agregar">agregar</button>
            </div>
        </form>
    </div>
</div>
<div class="container-items">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>contenido</th>
                    <th>precio</th>
                    <th>imagen</th>
                </tr>
            </thead>
            <?PHP  
            require_once('conex.php');
            $query="SELECT * FROM producto";
            $execute=mysqli_query($conexion,$query) or die(mysqli_error($conexion));
            while($fila=mysqli_fetch_array($execute)){

            ?>
            <tbody>
                <tr>
                    <td><?php echo $fila['id']?></td>
                    <td><?php echo $fila['nombre']?></td>
                    <td><?php echo $fila['precio']?></td>
                    <td><img src="<?php echo substr($fila['imagen'],3)?>" width="120"></td>
                </tr>
            </tbody>
            <?PHP  
            }
            ?>
        </table>
       </div>
       <script src="accesorios.js"></script>

      
   </body>

    <footer>
		<div class="contenedor-footer">
		<div class="content-foo">
				<h4>Phone</h4>
				<p><a href="https://chat.whatsapp.com/I9a9tPgwpk078ACeIw3AQE" target="new" aria-describedby="NewWindow" data-share-url="https://www.Strong Men.com/sharer/sharer.php?u=https%3A%2F%2Fwww.shopify.com%2Fes%2Fblog%2Fel-ecommerce-evolucion-natural-de-la-tienda-fisica" data-ga-action="Strong Men share" data-ga-event="Blog"><img src="img/F6.jpg" alt=""></a></p>
			</div>
			<div class="content-foo">
				<h4>Fackbook</h4>
				<p><a href="https://www.facebook.com/profile.php?id=61551666765375" target="new" aria-describedby="NewWindow" data-share-url="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.shopify.com%2Fes%2Fblog%2Fel-ecommerce-evolucion-natural-de-la-tienda-fisica" data-ga-action="Facebook share" data-ga-event="Blog"><img src="img/F2.jpg" alt=""></a></p>
			</div>
			<div class="content-foo">
				<h4>Instagram</h4>
				<p><a href="https://www.instagram.com/strong.men.pre/" target="new" aria-describedby="NewWindow" data-share-url="https://www.Instagram.com/sharer/sharer.php?u=https%3A%2F%2Fwww.shopify.com%2Fes%2Fblog%2Fel-ecommerce-evolucion-natural-de-la-tienda-fisica" data-ga-action="Instagram share" data-ga-event="Blog"><img src="img/F7.jpg" alt=""></a></p>
		</div>
		
	</footer>
            <p><h2 class="titulo-final">&copy; Pedro Ordaz | Rogelio Flores | Elton Dominguez</h2></p>


   </html>