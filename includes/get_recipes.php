<?php

require_once 'dbh.inc.php';

try {
    // Fetch recipes and their categories
    $stmt = $pdo->prepare("
        SELECT r.recipe_id, r.title, r.description, r.image, c.name AS category_name
        FROM recipes r
        JOIN recipe_categories rc ON r.recipe_id = rc.recipe_id
        JOIN categories c ON rc.category_id = c.category_id
    ");
    $stmt->execute();
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$recipes) {
        echo '<p>No recipes found.</p>';
    } else {
        foreach ($recipes as $recipe) {
            // Generate the HTML for each recipe
            echo '
            <div class="col-lg-4 col-sm-6">
                <div class="recipe-item">
                    <a href="recipe.php?name=' . urlencode($recipe['title']) . '">
                        <img src="data:image/jpeg;base64,' . base64_encode($recipe['image']) . '" alt="' . htmlspecialchars($recipe['title']) . '">
                    </a>
                    <div class="ri-text">
                        <div class="cat-name">' . htmlspecialchars($recipe['category_name']) . '</div>
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
