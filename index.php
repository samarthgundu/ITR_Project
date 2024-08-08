<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="index.css">
</head>

<body>

    
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" class="logo"> coffee <i class="fas fa-mug-hot"></i> </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            
            <a href="#book">book</a>
        </nav>
        <a href="#book" class="btn">book a table</a>

    </header>
    <section class="home" id="home">

        <div class="row">

            <div class="content">
                <h3>fresh coffee in the morning</h3>
                <a href="#book" class="btn">buy one now</a>
            </div>
            <div class="image">
                <img src="https://www.cafecoffeeday.com/sites/default/files/mobile-new-menu-cafe-coffee-day.jpg" class="main-home-image" alt="">
            </div>
        </div>


    </section>

    <section class="about" id="about">
        <h1 class="heading"> about us <span>why choose us</span> </h1>

        <div class="row">

            <div class="image">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTw6l18ETLJ4gv9sPZ8fLVLqjpo1NEr_u6E9Q&s" alt="">
            </div>
            <div class="content">
                <h3 class="title">what's make our coffee special!</h3>
                <p>Crafted from the finest handpicked beans, our coffee delivers a rich, robust flavor that's unmatched.
                     Our secret lies in the precise roasting process and dedication to quality, 
                     ensuring each cup is an exceptional experience.</p>
                <a href="#" class="btn">read more</a>
                <div class="icons-container">
                    <div class="icons">
                        
                        <p></pp>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-2.png" alt="">
                        <h3>our branches</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-3.png" alt="">
                        <h3>free delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
 <section class="menu" id="menu">
        <h1 class="heading"> our menu <span>popular menu</span> </h1>
        <div class="box-container">

            <a href="#" class="box">
                <img src="https://majestycoffee.com/cdn/shop/articles/wet_cappuccino_1200x.jpg?v=1684054636" alt="">
                <div class="content">
                    <h3>Cappuccino</h3>
                    <p>A cappuccino is an espresso-based coffee drink that is traditionally prepared with steamed milk foam.</p>
                    <span>$8.99</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="https://m.media-amazon.com/images/I/81fdp5vqrHL.AC_UF894,1000_QL80.jpg" alt="">
                <div class="content">
                    <h3>Espresso</h3>
                    <p>Espresso is one of the most popular coffee-brewing methods, of Italian origin.</p>
                    <span>$8.99</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbivlahh7K5RVcJij0iRgUePZyQZjTGlV9EA&s" alt="">
                <div class="content">
                    <h3>Latte</h3>
                    <p>The foam on top of the latte is also a distinguishing feature, adding texture and a little bit of sweetness to the overall taste.</p>
                    <span>$8.99</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="https://images.immediate.co.uk/production/volatile/sites/2/2021/11/Mocha-1fc71f7.png?resize=768,574" alt="">
                <div class="content">
                    <h3>Mocha</h3>
                    <p>A shot of espresso is combined with a chocolate powder or syrup, followed by milk or cream.</p>
                    <span>$8.99</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="https://i0.wp.com/misaexpress.in/wp-content/uploads/2023/06/79039.jpg?fit=451%2C451&ssl=1" alt="">
                <div class="content">
                    <h3>Americano</h3>
                    <p>Made by pouring hot water over one or two espresso shots, resulting in a drink of similar volume and strength to regular coffee.</p>
                    <span>$8.99</span>
                </div>
            </a>

            <a href="#" class="box"  >
                <img src="https://content3.jdmagicbox.com/comp/pune/i9/020pxx20.xx20.140125145603.u5i9/catalogue/cafe-coffee-day-east-street-pune-coffee-shops-2xkwh92.jpg" alt="">
                <div class="content">
                    <h3>Flat white</h3>
                    <p>A flat white is a blend of micro-foamed milk poured over a single or double shot of espresso</p>
                    <span>$8.99</span>
                </div>
            </a>

        </div>
    </section>


 

    <section class="book" id="book">
        <h1 class="heading"> booking <span>reserve a table</span> </h1>

        <form action="coffeedb.php" method="post"  class="center" class="review">
            

            Name:
            <br><input type="text" placeholder="Name" class="box" name="name">   <br>    

            Email:
            <br><input type="email" placeholder="email" class="box" name="email"><br>

            Number:
            <br><input type="number" placeholder="number" class="box" name="number"><br>

            coffee:<select name="coffee" id="coffee" class="box">
                <option value="" disabled selected>Coffee</option>
                <option value="Espresso">Espresso</option>
                <option value="Cappuccino">Cappuccino</option>
                <option value="Latte">Latte</option>
                <option value="Mocha">Mocha</option>
                <option value="Mocha">Americano</option>
                <option value="Mocha">Flat white</option>
            </select>
            <input type="submit" value="Book Coffee" class="button">
            
        </form>  
        
    </section>
    
    <section class="footer" >
        <div class="box-container">         

            <div class="box">
                <h3>quick links</h3>
                <a href="#home"><i class="fas fa-arrow-right"></i> home </a>
                <a href="#about"><i class="fas fa-arrow-right"></i> about </a>
                <a href="#menu"><i class="fas fa-arrow-right"></i> menu </a>
                <a href="#review"><i class="fas fa-arrow-right"></i> review </a>
                <a href="#book"> <i class="fas fa-arrow-right"></i> book </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +91 9921882300</a>
                <a href="#"> <i class="fas fa-phone"></i> +91 7249293100 </a>
                <a href="https://gmail.com"> <i class="fas fa-envelope"></i> ourcoffee@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> Solapur, india </a>
            </div>
            
            <div class="box">
                <h3>contact info</h3>
                <a href="https://facebook.com"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="https://twitter.com"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="https://in.linkedin.com"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>
        </div> 
    </section>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
