<?php

header('Content-Type: application/json');
require_once 'dbh.inc.php';

if (!isset($_GET['name']) || empty(trim($_GET['name']))) {
    http_response_code(400);
    echo json_encode(['error' => 'Recipe name is required']);
    exit;
}

$recipeTitle = trim($_GET['name']);

try {
    // Get recipe
    $stmt = $pdo->prepare("
        SELECT recipe_id, title, description, total_time, servings, difficulty_level, date_added,
               TO_BASE64(image) AS image
        FROM recipes
        WHERE title = :title
    ");
    $stmt->bindParam(':title', $recipeTitle);
    $stmt->execute();
    $recipe = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$recipe) {
        echo json_encode(['error' => 'Recipe not found']);
        exit;
    }

    $recipeId = $recipe['recipe_id'];

    // Get ingredients with names
    $stmt = $pdo->prepare("
        SELECT i.name AS ingredient_name, ri.quantity, ri.unit_of_measure, ri.preparation_notes
        FROM recipe_ingredients ri
        JOIN ingredients i ON ri.ingredient_id = i.ingredient_id
        WHERE ri.recipe_id = :recipe_id
    ");
    $stmt->bindParam(':recipe_id', $recipeId);
    $stmt->execute();
    $ingredients = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Get category names
    $stmt = $pdo->prepare("
        SELECT c.name AS category_name
        FROM recipe_categories rc
        JOIN categories c ON rc.category_id = c.category_id
        WHERE rc.recipe_id = :recipe_id
    ");
    $stmt->bindParam(':recipe_id', $recipeId);
    $stmt->execute();
    $categories = $stmt->fetchAll(PDO::FETCH_COLUMN); // returns array of names

    // Add to recipe
    $recipe['ingredients'] = $ingredients;
    $recipe['categories'] = $categories;

    echo json_encode($recipe);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Server error: ' . $e->getMessage()]);
}
