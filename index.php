<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Yoga Studio Template" />
    <meta name="keywords" content="Yoga, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Yummy</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>" type="text/css" />
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
      <div class="container">
        <div class="logo">
          <a href="./index.php"><img src="img/logo.png" alt="" /></a>
        </div>
        <div class="nav-menu">
          <nav class="main-menu mobile-menu">
            <ul>
              <li class="active"><a href="#">Home</a></li>
              <li><a href="recipes.php">Recipes</a></li>
              <li><a href="about-me.html">About me</a></li>
            </ul>
          </nav>
         
        </div>
        <div id="mobile-menu-wrap"></div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Page Top Recipe Section Begin -->
    <section class="page-top-recipe">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-lg-2">
            <a href="recipe.php?name=Chicken Alfredo">
            <div class="pt-recipe-item large-item">
              <div class="pt-recipe-img set-bg" data-setbg="img/this/chickenalfredo.jpg">
                <i class="fa fa-plus"></i>
              </div>
              
              <div class="pt-recipe-text">
                <h3>Chicken Alfredo</h3></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 order-lg-1">
            <a href="recipe.php?name=Pancakes">
            <div class="pt-recipe-item">
              <div
                class="pt-recipe-img set-bg"
                data-setbg="img/this/pancakes.jpg"
              >
                <i class="fa fa-plus"></i>
              </div>
              <div class="pt-recipe-text">
                <h4>Pancake</h4></a>
              </div>
            </div>
            <a href="recipe.php?name=Beef Tacos">
            <div class="pt-recipe-item">
              <div class="pt-recipe-img set-bg" data-setbg="img/this/beeftacos.jpg">
                <i class="fa fa-plus"></i>
              </div>
              <div class="pt-recipe-text">
                <h4>Beef tacos</h4></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 order-lg-3">
            <a href="recipe.php?name=Chicken Curry">
            <div class="pt-recipe-item">
              <div class="pt-recipe-img set-bg" data-setbg="img/this/chickencurry.jpg">
                <i class="fa fa-plus"></i>
              </div>
              <div class="pt-recipe-text">
                <h4>Chicken curry</h4></a>
              </div>
            </div>
            <div class="pt-recipe-item">
              <a href="recipe.php?name=Chocolate Cake">
              <div class="pt-recipe-img set-bg" data-setbg="img/this/chococake.jpg">
                <i class="fa fa-plus"></i>
              </div>
              <div class="pt-recipe-text">
                <h4>Chocolate cake</h4></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Page Top Recipe Section End -->

    <!-- Tunisian Recipe Section Begin -->
    <section class="top-recipe spad">
      <div class="section-title">
        <h5>Tunisian recipes</h5>
      </div>
      <div class="container po-relative">
        <div class="row">
          <div class="col-lg-6">
            <div class="top-recipe-item large-item">
              <div
                class="top-recipe-img set-bg"
                data-setbg="img/top-recipe/couscous.jpg"
              >
                <i class="fa fa-plus"></i>
              </div>
              <div class="top-recipe-text">
                <div class="cat-name">Meat lover</div>
                <a href="recipe.php?name=Couscous with Lamb">
                  <h4>Couscous with lamb</h4>
                </a>
                <p>
                  Tunisian couscous is a classic traditional dish that is
                  comforting and flavorful. The couscous is steamed and served
                  with meat, vegetables, and chickpeas.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="top-recipe-item">
              <div class="row">
                <div class="col-sm-4">
                  <div
                    class="top-recipe-img set-bg"
                    data-setbg="img/top-recipe/brik.jpg"
                  >
                    <i class="fa fa-plus"></i>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="top-recipe-text">
                    <div class="cat-name">Vegetarian</div>
                    <a href="recipe.php?name=Brik à loeuf">
                      <h4>Brik</h4>
                    </a>
                    <p>
                    A deep-fried pastry filled with egg, tuna, and parsley, wrapped in thin malsouka dough.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="top-recipe-item">
              <div class="row">
                <div class="col-sm-4">
                  <div
                    class="top-recipe-img set-bg"
                    data-setbg="img/top-recipe/lablabi.webp"
                  >
                    <i class="fa fa-plus"></i>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="top-recipe-text">
                    <div class="cat-name">comfort food</div>
                    <a href="recipe.php?name=Lablabi">
                      <h4>Lablabi</h4>
                    </a>
                    <p>
                    A spicy chickpea soup served with stale bread, olive oil, and harissa.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="top-recipe-item">
              <div class="row">
                <div class="col-sm-4">
                  <div
                    class="top-recipe-img set-bg"
                    data-setbg="img/top-recipe/ojja.jpg"
                  >
                    <i class="fa fa-plus"></i>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="top-recipe-text">
                    <div class="cat-name">Dinner</div>
                    <a href="recipe.php?name=Ojja with Merguez">
                      <h4>Ojja with merguez</h4>
                    </a>
                    <p>
                    Spicy tomato and pepper stew cooked with eggs and merguez sausage
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="top-recipe-item">
              <div class="row">
                <div class="col-sm-4">
                  <div
                    class="top-recipe-img set-bg"
                    data-setbg="img/top-recipe/pasta.jpg"
                  >
                    <i class="fa fa-plus"></i>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="top-recipe-text">
                    <div class="cat-name">Spicy</div>
                    <a href="#">
                      <h4>Makrouna</h4>
                    </a>
                    <p>
                      Pasta with a tunisian touch with its spicy garlic flavored
                      tomato sauce
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Top Recipe Section End -->

    <!-- Categories Filter Section Begin -->
    <div class="categories-filter-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="filter-item">
              <ul>
                <li class="active" data-filter="*">Dinner</li>
                <li data-filter=".meatlover">Vegetarian</li>
                <li data-filter=".glutenfree">Breakfast </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="cf-filter" id="category-filter">
          <div class="cf-item mix all mostpopular">
            <a href="recipe.php?name=Spaghetti Bolognese">
              <div class="cf-item-pic">
                <img src="img/this/Bolognese.jpg" alt="" />
              </div>
              <div class="cf-item-text">
                <h5>Spaghetti bolognese</h5>
              </div>
            </a>
          </div>
          <div class="cf-item mix all mostpopular">
          <a href="recipe.php?name=Chicken Curry">
              <div class="cf-item-pic">
                <img src="img/this/chickencurry.jpg" alt="" />
              </div>
              <div class="cf-item-text">
                <h5>Chicken curry</h5>
              </div>
          </a>
          </div>
          <div class="cf-item mix all meatlover mostpopular">
            <a href="recipe.php?name=Veggie Stir Fry">
              <div class="cf-item-pic">
                <img src="img/this/veggiestirfry.jpg" alt="" />
              </div>
              <div class="cf-item-text">
                <h5>Veggie stir fry</h5>
              </div>
            </a>
          </div>
          <div class="cf-item mix all meatlover">
            <a href="recipe.php?name=Tomato Soup">  
              <div class="cf-item-pic glutenfree">
                <img src="img/this/tomatosoup.jpg" alt="" />
              </div>
              <div class="cf-item-text">
                <h5>Tomato soup</h5>
              </div>
            </a>
          </div>
          <div class="cf-item mix all meatlover glutenfree">
            <a href="recipe.php?name=Avocado Toast">
              <div class="cf-item-pic">
                <img src="img/this/avocadotoast.jpg" alt="" />
              </div>
              <div class="cf-item-text">
                <h5>Avocado toast</h5>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Categories Filter Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="fs-left">
              <div class="logo">
                <a href="./index.php">
                  <img src="img/footer-logo.png" alt="" />
                </a>
              </div>
              <p>
                Bringing you the tastiest recipes from kitchens around the world — whether you're a beginner or a seasoned chef,
                 we’ve got something delicious for everyone. 
               
              </p>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1">
            <div class="social-links">
              <a href="https://www.instagram.com/emna.exe/"><i class="fa fa-instagram"></i><span>Instagram</span></a>
              <a href="https://fr.pinterest.com/ThatOvenFeelinCom/"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
              <a href="https://www.youtube.com/@Recipetineats"><i class="fa fa-youtube"></i><span>Youtube</span></a>
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
          <input type="text" id="search-input" placeholder="Search here....." />
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
    <script> window.chtlConfig = { chatbotId: "3984217127" } </script>
<script async data-id="3984217127" id="chatling-embed-script" type="text/javascript" src="https://chatling.ai/js/embed.js"></script>
  </body>
</html>
