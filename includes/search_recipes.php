<?php
require_once '../dbh.inc.php'; // Include your database connection

$searchQuery = '';
$recipes = [];

if (isset($_GET['search_query']) && !empty(trim($_GET['search_query']))) {
    $searchQuery = trim($_GET['search_query']); // Get the search query from the URL

    try {
        // Prepare the SQL query to search by recipe name or category
        $stmt = $pdo->prepare("
            SELECT r.recipe_id, r.title, r.description, c.name AS category_name
            FROM recipes r
            LEFT JOIN recipe_categories rc ON r.recipe_id = rc.recipe_id
            LEFT JOIN categories c ON rc.category_id = c.category_id
            WHERE r.title LIKE :search_query OR c.name LIKE :search_query
            GROUP BY r.recipe_id
        ");
        $stmt->bindValue(':search_query', '%' . $searchQuery . '%');
        $stmt->execute();

        $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all results
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>

<!-- Displaying Search Results -->
<div class="recipe-list">
  <?php
  if (!empty($recipes)) {
      foreach ($recipes as $recipe) {
          echo '<div class="col-lg-4 col-sm-6">';
          echo '    <div class="recipe-item">';
          echo '        <a href="recipe.php?name=' . urlencode($recipe['title']) . '"><img src="img/recipe/' . $recipe['recipe_id'] . '.jpg" alt=""></a>';
          echo '        <div class="ri-text">';
          echo '            <div class="cat-name">' . htmlspecialchars($recipe['category_name']) . '</div>';
          echo '            <a href="recipe.php?name=' . urlencode($recipe['title']) . '">';
          echo '                <h4>' . htmlspecialchars($recipe['title']) . '</h4>';
          echo '            </a>';
          echo '            <p>' . htmlspecialchars($recipe['description']) . '</p>';
          echo '        </div>';
          echo '    </div>';
          echo '</div>';
      }
  } else {
      echo '<p>No recipes found for "' . htmlspecialchars($searchQuery) . '".</p>';
  }
?>
</div>