<?php

require_once 'dbh.inc.php';

try {
    $hasSearch = isset($_GET['search_query']) && !empty($_GET['search_query']);

    // Fetch all recipes
    $recipeQuery = "
        SELECT DISTINCT r.recipe_id, r.title, r.description, r.image
        FROM recipes r
    ";

    if ($hasSearch) {
        $recipeQuery .= "
            WHERE r.title LIKE :search
               OR r.recipe_id IN (
                   SELECT rc.recipe_id
                   FROM recipe_categories rc
                   JOIN categories c ON rc.category_id = c.category_id
                   WHERE c.name LIKE :search
               )
        ";
    }

    $recipeStmt = $pdo->prepare($recipeQuery);

    if ($hasSearch) {
        $search = '%' . $_GET['search_query'] . '%';
        $recipeStmt->bindParam(':search', $search);
    }

    $recipeStmt->execute();
    $recipes = $recipeStmt->fetchAll(PDO::FETCH_ASSOC);

    // Fetch all categories for all recipes
    $categoryStmt = $pdo->query("
        SELECT rc.recipe_id, c.name AS category_name
        FROM recipe_categories rc
        JOIN categories c ON rc.category_id = c.category_id
    ");
    $categories = $categoryStmt->fetchAll(PDO::FETCH_ASSOC);

    // Group categories by recipe_id
    $categoryMap = [];
    foreach ($categories as $cat) {
        $categoryMap[$cat['recipe_id']][] = $cat['category_name'];
    }

    // Display recipes
    if (!$recipes) {
        echo '<p>No recipes found.</p>';
    } else {
        foreach ($recipes as $recipe) {
            echo '
            <div class="col-lg-4 col-sm-6">
                <div class="recipe-item">
                    <a href="recipe.php?name=' . urlencode($recipe['title']) . '">
                        <img src="data:image/jpeg;base64,' . base64_encode($recipe['image']) . '" alt="' . htmlspecialchars($recipe['title']) . '">
                    </a>
                    <div class="ri-text">';

            // Show each category as a tag
            if (isset($categoryMap[$recipe['recipe_id']])) {
                foreach ($categoryMap[$recipe['recipe_id']] as $category) {
                    echo '<div class="cat-name">' . htmlspecialchars($category) . '</div> ';
                }
            }

            echo '
                        <a href="recipe.php?name=' . urlencode($recipe['title']) . '">
                            <h4>' . htmlspecialchars($recipe['title']) . '</h4>
                        </a>
                        <p>' . htmlspecialchars(substr($recipe['description'], 0, 100)) . '...</p>
                    </div>
                </div>
            </div>';
        }
    }
} catch (PDOException $e) {
    echo '<p>Error: ' . $e->getMessage() . '</p>';
}
