<?php
  session_start();
  if(isset($_POST['submit'])){
    require './core/core.php';
      require './core/db.php';
      $_SESSION['name'] = mysqli_real_escape_string($db,$_POST['name']);
      $_SESSION['email'] = mysqli_real_escape_string($db,trim($_POST['email']));
      $_SESSION['phone'] = mysqli_real_escape_string($db,$_POST['phone']);
      $_SESSION['message'] = mysqli_real_escape_string($db,$_POST['message']);
      header("Location: ./core/handler.php?id=1");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <script src="./assets/js/aos.js"></script>
    <meta name="theme-color" content="#F01D7F" >
    <title>Pretty Collections | Welcome</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="./assets/img/rszz.png" alt="" height="50" width="120" ></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>    
              <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Home
                      <span class="visually-hidden">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <Features class="nav-link" href="#">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
      <main class="main" >
        <div class="intro-text">
            <p>Your home of world class products</p>
            <a href="#features" class=" btn btn-primary bg-primary">Explore  <i class="fas fa-angle-down"></i> </a>
        </div>
      </main>
      <section class="features" id="features" >
        <br>
        <h3 class="text-info" data-aos="fade-right" data-aos-duration="2000" >Features</h3>
        <div class="jumbotron features-container">

          <div class="card border-secondary mb-3" data-aos="fade-up" data-aos-duration="1800" data-aos-delay="100" style="max-width: 20rem;">
            
            <div class="card-body">
              <h4 class="card-title text-info"><i class="fas fa-truck fa-2x"></i></h4>
              <p class="card-text text-info">Quick & Cheap Delivery</p>
              <small class="text-primary" >Quick delivery to your destination at a cheap price </small>
            </div>
          </div>

          <div class="card border-secondary mb-3 "data-aos="fade-up" data-aos-duration="1600" data-aos-delay="600" style="max-width: 20rem;">
            
            <div class="card-body">
              <h4 class="card-title text-info"><i class="far fa-credit-card fa-2x"></i></h4>
              <p class="card-text text-info">Secure payment</p>
              <small class="text-primary">We take into account all your payments, either cashless or in cash</small>
            </div>
          </div>
          
          <div class="card border-secondary mb-3" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="800" style="max-width: 20rem;">
            
            <div class="card-body">
              <h4 class="card-title text-info"><i class="fas fa-handshake fa-2x"></i></h4>
              <p class="card-text text-info">Return Guarantee</p>
              <small class="text-primary">We accept returns when the goods are defective or not according to your order</small>
            </div>
          </div>

          <div class="card border-secondary mb-3 " data-aos="fade-up" data-aos-duration="1200" data-aos-delay="1000" style="max-width: 20rem;">
            
            <div class="card-body">
              <h4 class="card-title text-info"><i class="fas fa-user-clock fa-2x"></i></h4>
              <p class="card-text text-info">24-Hour Support</p>
              <small class="text-primary">We instantly reply to your messages</small>
            </div>
          </div>


        </div>
      </section>
      <section class="categories" >
        <h3 class="text-info" data-aos="fade" data-aos-duration="1000">Categories</h3>
        <div class="items">
              <div class="shoes" data-aos="fade-right" data-aos-duration="1600">
                <p class="text-info" >Shoes</p>
              </div>
              <div class="watches" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="600">
                <p class="text-info">Accesories</p>
              </div>
              <div class="jewellry" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                <p class="text-info">Jewellry</p>
              </div>
              <div class="clothing" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <p class="text-info">Clothing</p>
              </div>
        </div>
        
      </section>
      <section class="featured">
        <h3 class="text-primary" data-aos="fade" data-aos-duration="500" >FEATURED PRODUCTS</h3>
        <div class="products-container">
          
          <div class="product">
            <img src="./assets/img/watch (3).jpg" alt="" width="200px" height="200px">
            <p class="text-primary" >watch</p>
            <div class="border bg-primary"></div> 
            <h5 class="text-info" >Kes 1200</h5> 
            <small class="text-info">Available</small>  
            <a href="#" class="btn btn-primary">Order</a>  
          </div>

          <div class="product">
            <img src="./assets/img/pexels-wallace-chuck-3261069.jpg" alt="" width="200px" height="200px">
            <p class="text-primary" >Sneakers</p>
            <div class="border bg-primary"></div> 
            <h5 class="text-info" >Kes 1800</h5> 
            <small class="text-info">Available</small>  
            <a href="#" class="btn btn-primary">Order</a>  
          </div>

          <div class="product">
            <img src="./assets/img/gucci_hb.jpg" alt="" width="200px" height="200px">
            <p class="text-primary" >handbag</p>
            <div class="border bg-primary"></div> 
            <h5 class="text-info" >Kes 1200</h5> 
            <small class="text-info">Available</small>  
            <a href="#" class="btn btn-primary">Order</a>  
          </div>

          <div class="product">
            <img src="./assets/img/glasses.jpg" alt="" width="200px" height="200px">
            <p class="text-primary" >glasses</p>
            <div class="border bg-primary"></div> 
            <h5 class="text-info" >Kes 500</h5> 
            <small class="text-info">Available</small>  
            <a href="#" class="btn btn-primary">Order</a>  
          </div>

        </div>
      </section>

      <section class="contact">
        <h3 class="text-primary">Let's chat</h3>
        <div class="form-container">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Someone" required>
              <label for="floatingInput">Your Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Someone@gmail.com" required>
              <label for="floatingInput">Your Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="floatingInput" placeholder="Phone" name="phone" required>
              <label for="floatingInput">Your phone (Start with 0)</label>
            </div>
            <div class="form-group">
              <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Message" required></textarea> <br>
            </div>
            <div class="form-group">
              <input type="submit" value="Send message" name="submit" class="btn btn-light">
            </div>
          </form>
        </div>
      </section>
      <footer>

        <div class="logo">
            <img src="./assets/img/rszz.png" height="75" width="180" alt="">
        </div>
        <div class="links">
            <h4>Quick links</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#about-us">Features</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="./pages/shop/">Products</a></li>
            </ul>
        </div>
        <div class="links">
            <h4>Contacts</h4>
            <ul>
                <li> <i class="fas fa-phone-alt"></i> 254 711 831 773</li>
                <li> <i class="far fa-envelope"></i> kamankuranelly@gmail.com</li>
                <li><i class="fas fa-clock"> </i> weekdays 8.00am - 6.00pm </li>
                <li><i class="fas fa-globe"></i> prettycollectionske</li>
            </ul>
        </div>
        <div class="">
            <h4>Categories</h4>
            <ul>
                <li>clothing</li>
                <li>footwear</li>
                <li>jewellery</li>
                <li>Accesories</li>
            </ul>
        </div>

        <!-- <div class="newsletter">
            <h4>Subscribe to our newsletter</h4>
            <form action="/i&j/index.php" method="post">
                <input type="email" placeholder="Enter your email here" name="nws_email" required class="input">
                <input type="submit" value="Join" name="subscribe" class="submit">
            </form>
        </div> -->
    </footer>
    <div class="dev">
        <small>Made by <a href="https://wa.me/254797061691?Hi">Seb Astian</a></small>
    </div>
      <script src="./assets/js/init.js"></script>
      <script src="./assets/js/font_awesome_main.js"></script>
      <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>