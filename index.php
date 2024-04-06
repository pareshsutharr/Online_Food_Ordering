<?php
	// Initialize session
	session_start();

	// if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
	// 	header('location: login.php');
	// 	exit;
	// }
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="refresh"  content="width=device-width, initial-scale=1.0">
    <title>Foodie - Food Ordering Website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    
<?php include 'header.php'; ?>





<section class="home" id="home">

    <div class="content">
        <h3>fresh and <span>organic</span> products for your</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
        <a href="products.php" class="btn">shop now</a>
    </div>

</section>


<section class="products" id="products">

    <h1 class="heading"> our <span>Menu</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="online fastfood website images/burger.png" alt="">
                <h3>BURGER</h3>
                <div class="price"> &#8377 60/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="products.php" class="btn">Order Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/sandwich png by haris gfx) (13).png" alt="">
                <h3>SANDWICH</h3>
                <div class="price">  &#8377 50/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="products.php" class="btn">Order Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/cheesbol-removebg-preview.png" alt="">
                <h3>CHEESE BALL</h3>
                <div class="price">  &#8377 80/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/HOT.png" alt="">
                <h3>HOTDOG</h3>
                <div class="price">  &#8377 200/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="online fastfood website images/manchurian-removebg-preview.png" alt="">
                <h3>MANCHURIAN</h3>
                <div class="price">  &#8377 80/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="products.php" class="btn">Order Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/png by haris gfx (2).png" alt="">
                <h3>NOODLES</h3>
                <div class="price">  &#8377 100/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/by haris gfx (3).png" alt="">
                <h3>PIZZA</h3>
                <div class="price">  &#8377 150/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/ff.jpg" alt="">
                <h3>FRENCH FRIES</h3>
                <div class="price">  &#8377 100/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="online fastfood website images/PAVBHAJI-removebg-preview.png" alt="">
                <h3>PAV BHAJI</h3>
                <div class="price"> &#8377 100/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="products.php" class="btn">Order Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/vada-pav-wada-pao-is-indian-desi-burger-is-roadside-fast-food-dish-from-maharashtra-selective-focus-removebg-preview.png" alt="">
                <h3>VADA PAV</h3>
                <div class="price">  &#8377 50/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="products.php" class="btn">Order Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/schezwan-paneer-fried-rice-with-szechuan-sauce-cottage-cheese-cubes-served-bowl-plate-pan-selective-focus-removebg-preview.png" alt="">
                <h3>SCHEZWAN FRIED RICE</h3>
                <div class="price">  &#8377 100/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/dabeli-kutchi-dabeli-double-roti-is-popular-snack-food-india-originating-kutch-kachchh-region-gujarat-removebg-preview.png" alt="">
                <h3>DABELI</h3>
                <div class="price">  &#8377 50/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="online fastfood website images/misal-pav-is-popular-maharashtrian-street-food-usal-sprouts-curry-topped-with-onions-tomatoes-farsan-chutney-removebg-preview.png" alt="">
                <h3>MISAL PAV</h3>
                <div class="price"> &#8377 60/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="products.php" class="btn">Order Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/dahi-puri-chat-is-indian-road-side-snack-item-which-is-especially-popular-state-maharashtra-india-removebg-preview.png" alt="">
                <h3>DAHI PURI CHAAT</h3>
                <div class="price">  &#8377 50/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/bhelpuri-bhel-is-savoury-roadside-snack-originating-from-india-is-also-type-chaat-removebg-preview.png" alt="">
                <h3>BHEL PURI</h3>
                <div class="price">  &#8377  60/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/rajasthani-shahi-raj-kachori-stuffed-with-potato-sprout-filling-served-with-curd-chutney-sev-plate-removebg-preview.png" alt="">
                <h3>SAHI RAJ KACHORI</h3>
                <div class="price">  &#8377 50/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">Order Now</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="online fastfood website images/milkshake-set-table-removebg-preview.png" alt="">
                <h3>MILKSHAKE</h3>
                <div class="price"> &#8377 100/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="products.php" class="btn">Order Now</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/front-view-sweet-pancakes-tower-arrangement-removebg-preview (1).png" alt="">
                <h3>PANCAKE</h3>
                <div class="price">  &#8377 80/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/angoori-rasmalai-is-indian-dessert-sweet-with-dry-fruits-saffron-toppings-served-bowl-moody-background-selective-focus-removebg-preview.png" alt="">
                <h3>RASMALI</h3>
                <div class="price">  &#8377 100/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/various-donuts-white-background-removebg-preview.png" alt="">
                <h3>DONUTS</h3>
                <div class="price">  &#8377 100/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>


</section>


<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="online fastfood website images/dixit.jpg" alt="">
                <p>Excellent food. Menu is extensive and seasonal to a particularly high standard. Definitely fine dining.Great place to hangout, chill or go out on a date.Highly recommended.</p>
                <h3>Dixit </h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/utt.jpg" alt="">
                <p>Delicious food, waiters are very attentive, and super nice atmosphere. Plus it’s all at an affordable price.
                    Can totally recommend it and will definitely come back again.</p>
                <h3>Uttam Mension</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/dpkh.jpg" alt="">
                <p>Loved this place. The atmosphere, food and most of the drinks were great. The bartenders knew their mixology and it showed in the drinks. Great place to hangout, chill or go out on a date.</p>
                <h3>Deepak Deora</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="online fastfood website images/pic-4.png" alt="">
                <p>Loved this place. The atmosphere, food and most of the drinks were great. The bartenders knew their mixology and it showed in the drinks. Great place to hangout, chill or go out on a date.</p>
                <h3>Lucia</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>

</section>


<?php include 'footer.php'; ?>

<!-- footer section ends -->
















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>