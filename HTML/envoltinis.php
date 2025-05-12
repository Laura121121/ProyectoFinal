<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Square One</title>
    <link rel="stylesheet" href="../CSS/postres.css">
</head>
<body>
<header>
        <div class="container">
            <nav class="navbar">
                <div class="nav__logo">
                <a href="../Login/Principal.php">
                <img
                        src="../IMG/Logo.png"  height="170"
                        alt="logo"
                        class="nav__logo-dark"
                      />
                    </a>
                  </div>
                
                  <ul class="nav-links">
                  <li><a href="../Login/Principal.php">INICIO</a></li>
                    <li><a href="../HTML/entradas.php">MENU</a></li>
                    <li><a href="../HTML/Historia.php">HISTORIA</a></li>
                    <li><a href="../Login/Registro.php">CLOSED</a></li>
                    <div class="cart-icon">
                     🛒 <span>0</span>
                    </div>                          
                  </ul>
          </nav>
        </div>
    </header>

    <main>
    <div class="category-filters">
                <a href="../HTML/Desayuno.php"><button class="category-btn active">Desayunos</button></a>
               <a href="../HTML/entradas.php"><button class="category-btn">Entradas</button></a>
                <a href="../HTML/hamburguesa.php"><button class="category-btn">Hamburguesas</button></a>
                <a href="../HTML/mexicano.php"><button class="category-btn">Mexicano</button></a>
                <a href="../HTML/envoltinis.php"><button class="category-btn">Envoltinis</button></a>
                <a href="../HTML/carnes.php"><button class="category-btn">Carnes</button></a>
                <a href="../HTML/pastas.php"><button class="category-btn">Pastas</button></a>
                <a href="../HTML/postres.php"><button class="category-btn">Postres</button></a>
                <a href="../HTML/bebidas.php"><button class="category-btn">Bebidas</button></a>
                <a href="../HTML/verificacion.php"><button class="category-btn">Bebidas Alcoholicas</button></a>  
            </div>

        <div class="cards">
            <div class="card"> 
                <img src="../IMG/en1.jpg" alt="">
                <h4 class="card--title">De Jamon y Queso</h4>
                <p class="menu-item-description">Pechuga de pollo relleno de jamón y queso...</p>
                <div class="card--price">
                    <div class="price">RD$495.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Pechuga de pollo relleno de jamón y queso mozzarella bañado con salsa bechamel.
                </ul>
            </div>
        </div>

            <div class="card">
                <img src="../IMG/en2.jpg" alt="">
                <h4 class="card--title">De Platano Maduro</h4>
                <p class="menu-item-description">Pechuga de pollo rellena de queso, plátano maduro y...</p>
                <div class="card--price">
                    <div class="price">RD$375.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Pechuga de pollo rellena de queso, plátano maduro y tocineta, en salsa teriyaki y crema.
                </ul>
            </div>
        </div>
            
            <div class="card">
                <img src="../IMG/en3.jpg" alt="">
                <h4 class="card--title">De Pollo y Espinaca</h4>
                <p class="menu-item-description">Pechuga de pollo rellena de queso mozzarella...</p>
                <div class="card--price">
                    <div class="price">RD$375.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Pechuga de pollo rellena de queso mozzarella, espinacas y salsa Da Vinci. Acompañado de la guarnición de su interés. 
                </ul>
            </div>
        </div>
            
            <div class="card">
                <img src="../IMG/en4.jpg" alt="">
                <h4 class="card--title">De Pollo</h4>
                <p class="menu-item-description">Pechuga de pollo enrollada con tiras de tocino a la...</p>
                <div class="card--price">
                    <div class="price">RD$450.00</div>
                    <img src="../IMG/Plus.png" alt="Agregar" class="add-to-cart">
            </div>
            <!-- Contenido oculto para el modal -->
            <div class="hidden-details">
                <ul class="ingredients">
                Pechuga de pollo enrollada con tiras de tocino a la parrilla y queso mozzarella, todo perfectamente cocido para ofrecer una combinación irresistible.
                </ul>
            </div>
           </div>
         </div>
       </main>

        <!-- Modal -->
        <div id="modal" class="modal">
  <div class="modal-content">
     <span class="close">&times;</span>
     <img id="modal-img" src="" alt="">
     <h4 id="modal-title"></h4>
     <p id="modal-description"></p>
     <p id="modal-price" class="price"></p>
     <button id="modal-add-btn" class="add-to-cart">Agregar al carrito</button>
    </div>
   </div>

    <div class="sidebar" id="sidebar">
        <button class="sidebar-close">✖</button>
        <h3>Carrito de Compras</h3>
        <div class="cart-items"></div>
        <div class="cart-total">
            <span> Subtotal:</span> RD$0.00<br>
            <span> ITBIS (18%):</span> RD$0.00<br>
            <span> Envío:</span> RD$0.00<br>
            <strong>Total: RD$0.00</strong>
        </div>

        <div class="payment-options">
        <!-- Opción PayPal -->
        <label class="payment-method paypal-method selected">
            <input type="radio" name="payment-method" value="paypal" checked>
            <img src="../IMG/pp.png" alt="PayPal" class="payment-icon">
            <div class="payment-details">
                <h4>PayPal</h4>
                <p>Pago con cuenta PayPal</p>
            </div>
        </label>
        
        <!-- Opción Efectivo -->
        <label class="payment-method cash-method">
            <input type="radio" name="payment-method" value="cash">
            <div class="payment-icon">$</div>
            <div class="payment-details">
                <h4>Efectivo</h4>
                <p>Paga al recibir tu pedido</p>
            </div>
        </label>
    </div>
    
    <button class="finalize-btn" id="finalizar-compra">Finalizar compra</button>
    <style>
    .finalize-btn {
    width: 100%;
    padding: 16px;
    background: linear-gradient(135deg, #D94E28, #ff7043);
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 1.1rem;
    font-weight: 700;
    cursor: pointer;
    margin-top: 25px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
}

.finalize-btn:hover {
    background: linear-gradient(135deg, #c04524, #e85c35);
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
}

.finalize-btn:active {
    transform: scale(0.98);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}
    </style>
    </div>
       

    <section class="section-footer">
        <footer class="footer">
          <div class="footer-group-container">
            <div class="footer-group box-logo">
              <img src="../IMG/FACHADA.jpg" alt="" class="footer__logo">
            </div>
            <div class="footer-group box-content">
              <ul class="footer__links">
                <li class="footer__li">
                  <span><i class="ri-map-pin-2-fill footer__icon"></i></span>
                  <p class="footer__li-text">Av. Salvador Estrella Sadhalá</p>
                </li>
                <li class="footer__li">
                  <span><i class="ri-mail-fill footer__icon"></i></span>
                  <p class="footer__li-text">squareone@gmail.com</p>
                </li>
              </ul>
              <div class="footer__socials">
                <a href="https://www.facebook.com/square1rd"><i class="ri-facebook-circle-fill footer__social-icons"></i></a>
                <a href="https://www.instagram.com/squareonecafe?igsh=MTd0eWl5Z21rdW9rNg=="><i class="ri-instagram-fill footer__social-icons"></i></a>
                <a href="https://x.com/squareonecafe"><i class="ri-twitter-fill footer__social-icons"></i></a>
              </div>
            </div>
            <div class="footer-group box-map">
              <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.3059313253116!2d-70.69021072573855!3d19.44237234037057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf68cf01d16b%3A0xd35cc3bd8b0fcda2!2sSquare%20One!5e0!3m2!1ses-419!2sdo!4v1742901932824!5m2!1ses-419!2sdo" 
                  width="300" 
                  height="200" 
                  style="border:0;" 
                  allowfullscreen="" 
                  loading="lazy" 
                  referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>
          <div class="footer__bottom-text-box">
          <p class="footer__bottom-text">IMPUESTOS NO INCLUIDOS</p>
          </div>
        </footer>
      </section>

    <script src="../JS/in.js"></script>
    <script>
        // Configuración de PayPal
        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: document.querySelector('.cart-total strong').textContent.replace('Total: RD$', '') / 56.50 // Conversión a USD
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    alert('Pago completado por ' + details.payer.name.given_name);
                    // Aquí puedes enviar los datos a tu backend
                });
            }
        }).render('#paypal-button-container');

        // Mostrar/ocultar instrucciones de pago en efectivo
        document.getElementById('cash').addEventListener('change', function() {
            if(this.checked) {
                document.querySelector('.cash-instructions').style.display = 'block';
                document.getElementById('paypal-button-container').style.display = 'none';
            }
        });

        document.getElementById('paypal').addEventListener('change', function() {
            if(this.checked) {
                document.querySelector('.cash-instructions').style.display = 'none';
                document.getElementById('paypal-button-container').style.display = 'block';
            }
        });
    </script>
    <script>
document.getElementById('finalizar-compra').addEventListener('click', function() {
    // Obtener datos del carrito
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const cartTotal = document.querySelector('.cart-total strong').textContent;
    
    // Obtener datos del usuario desde la sesión PHP
    <?php if(isset($_SESSION['user'])): ?>
        const userData = {
            nombre: '<?php echo $_SESSION['user']['name']; ?>',
            email: '<?php echo $_SESSION['user']['email']; ?>',
            direccion: '<?php echo isset($_SESSION['user']['address']) ? $_SESSION['user']['address'] : 'Dirección no especificada'; ?>'
        };
    <?php else: ?>
        const userData = {
            nombre: 'Cliente Generico',
            email: '',
            direccion: 'Dirección no especificada'
        };
    <?php endif; ?>
    
    // Obtener método de pago seleccionado
    const paymentMethod = document.querySelector('input[name="payment-method"]:checked').value;
    
    // Guardar datos en localStorage para la factura
    localStorage.setItem('facturaData', JSON.stringify({
        items: cartItems,
        total: cartTotal,
        cliente: userData,
        paymentMethod: paymentMethod,
        fecha: new Date().toISOString()
    }));
    
    // Redirigir a la página de factura
    window.location.href = 'factura.php';
});
</script>
</body>
</html>


