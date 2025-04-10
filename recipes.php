<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Yoga Studio Template">
  <meta name="keywords" content="Yoga, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Yummy | Template</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">

  <!-- Css Styles -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>"
    type="text/css" />

</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header Section Begin -->
  <header class="header-section-other">
    <div class="container-fluid">
      <div class="logo">
        <a href="./index.html"><img src="img/little-logo.png" alt=""></a>
      </div>
      <div class="nav-menu">
        <nav class="main-menu mobile-menu">
          <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Pages</a>
              <ul class="sub-menu">
                <li><a href="about-me.html">About Me</a></li>
                <li><a href="categories.html">Categories</a></li>
                <li><a href="recipe.html">Recipe</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </li>
            <li><a href="recipe.html">Recipes</a></li>
            <li><a href="categories.html">Best Of</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
        <div class="nav-right search-switch">
          <i class="fa fa-search"></i>
        </div>
      </div>
      <div id="mobile-menu-wrap"></div>
    </div>
  </header>
  <!-- Header End -->

  <!-- Hero Search Section Begin -->
  <div class="hero-search set-bg" data-setbg="img/search-bg.jpg">
    <div class="container">
      <div class="filter-table">
        <form action="recipes.php" method="GET" class="filter-search">
          <input type="text" name="search_query" placeholder="Search recipe"
            value="<?php echo isset($_GET['search_query']) ? htmlspecialchars($_GET['search_query']) : ''; ?>">
          <button type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Hero Search Section End -->

  <section class="recipe-section spad">
    <div class="container">
      <div class="row">
        <?php include 'includes/get_recipes.php'; ?>
      </div>
    </div>
  </section>

  <!-- Footer Section Begin -->
  <footer class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="fs-left">
            <div class="logo">
              <a href="./index.html">
                <img src="img/footer-logo.png" alt="">
              </a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
              viverra maecenas accumsan lacus vel facilisis.</p>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1">
          <form action="#" class="subscribe-form">
            <h3>Subscribe to our newsletter</h3>
            <input type="email" placeholder="Your e-mail">
            <button type="submit">Subscribe</button>
          </form>
          <div class="social-links">
            <a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
            <a href="#"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
            <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
            <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
            <a href="#"><i class="fa fa-youtube"></i><span>Youtube</span></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="copyright-text">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i>
            by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->
  <!-- Search model -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-switch">+</div>
      <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Search here.....">
      </form>
    </div>
  </div>
  <!-- Search model end -->

  <!-- Js Plugins -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/mixitup.min.js"></script>
  <script src="js/main.js"></script>







</body>

</html>