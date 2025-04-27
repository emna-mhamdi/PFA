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
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/nice-select.css" type="text/css"/>
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>" type="text/css"/>

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
                <a href="./index.php"><img src="img/little-logo.png" alt=""></a>
            </div>
            <div class="nav-menu">
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li ><a href="index.php">Home</a></li>
                        <li class="active"><a href="recipes.php">Recipes</a></li>
                        <li><a href="about-me.html">About me</a></li>

                 
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

    <!-- Single Recipe Section Begin -->
    <section class="single-page-recipe spad">
        <div class="recipe-top">
            <div class="container-fluid">
                <div class="recipe-title">
                    <span id="recipe-summary"></span>
                    <h2 id="recipe_title"></h2>
                    <ul id="categories">
                    </ul>
                </div>
                <img id="recipe-image" alt="Recipe Image" style="display: block; margin: 0 auto;" />
                >
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ingredients-item">
                        <div class="intro-item">
                            <p id="recipe-time"></p>
                        </div>
                        <div class="ingredient-list">                           
                            <div class="list-item">
                                <h5>Ingredients</h5>
                                <ul id="recipe-ingredients"></ul>                      
                            </div>
                        </div>
                    </div>
                    <div class="nutrition-fact">
                        <div class="nutri-title">
                            <h6>Nutrition Facts</h6>
                            <span id="recipe-servings"></span>
                        </div>
                        <ul id="recipe-nutrition"></ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="recipe-right">
                        <div class="recipe-desc">
                            <h3>Description</h3>
                            <p id="recipe-description"></p>
                        </div>
                        <div class="instruction-list">
                            <h3>Instructions</h3>
                            <ul id="recipe-instructions"></ul>
                        </div>
                        <div class="notes">
                            <div id="notes-section" style="display:none;">
                                <h3>Notes</h3>
                                <div id="recipe-notes"></div> <!-- Will be filled with .notes-item divs -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Recipe Section End -->

   

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="fs-left">
                        <div class="logo">
                            <a href="./index.php">
                                <img src="img/footer-logo.png" alt="">
                            </a>
                        </div>
                        <p>    Bringing you the tastiest recipes from kitchens around the world — whether you're a beginner or a seasoned chef,
                             we’ve got something delicious for everyone. <br />
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




  
  <script src="js/getrecipe.js?<?php echo time(); ?>"></script>
  <script> window.chtlConfig = { chatbotId: "3984217127" } </script>
  <script async data-id="3984217127" id="chatling-embed-script" type="text/javascript" src="https://chatling.ai/js/embed.js"></script>


</body>

</html>