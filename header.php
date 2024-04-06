<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> Foodiee  </a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="products.php">products</a>
        <a href="#about">About us</a>
        <a href="Contact.php">Contact Us</a>


        <?php
        if (isset($_SESSION['username'])) {
        echo "<a href='logout.php'>Logout</a>";
        }
        ?>
        <?php
        if (!isset($_SESSION['username'])) {
        echo "<a href='login.php'>Login</a>";
        }
        ?>
        
    </nav>



     <div class="icons" >  
        <div class="fas fa-bars " id="menu-btn"></div>
        <div class="fas fa-search " id="search-btn"></div>
        <a href="Cart.php"><div class="fas fa-shopping-cart " id="cart-btn"></div></a>
        <!-- <a href="register.php"><button style="background-color:#eee; color:black; padding: 6px; font-size:21px; border-radius:5px; margin-left:5px;">SignUp</button></a>
        <a href="logout.php"><button style="background-color:#eee; color:black; padding: 6px; font-size:21px; border-radius:5px; margin-left:5px;">LogOut</button></a> -->
      </div>
   

    

</header>
