<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Recipe Details</title>
</head>
<body>
  <h1 id="recipe_title"></h1>
  <img id="recipe-image" alt="Recipe Image" style="max-width: 300px;"><br>
  <p id="recipe-description"></p>
  <p><strong>Time:</strong> <span id="recipe-time"></span></p>
  <p><strong>Servings:</strong> <span id="recipe-servings"></span></p>
  <p><strong>Difficulty:</strong> <span id="recipe-difficulty"></span></p>
  <p><strong>Date Added:</strong> <span id="recipe-date"></span></p>
  <ul id="categories">
  </ul>
  <h3>Ingredients:</h3>
  <ul id="recipe-ingredients"></ul>
  <p id="recipe-nutrition"></p>

  <script src="js/getrecipe.js?<?php echo time(); ?>"></script>
</body>
</html>
