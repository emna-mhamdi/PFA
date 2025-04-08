function getQueryParam(name) {
  const params = new URLSearchParams(window.location.search);
  return params.get(name);
}

async function fetchRecipe() {
  const recipeName = getQueryParam("name");
  if (!recipeName) {
    console.error("No recipe name provided");
    return;
  }

  console.log(encodeURIComponent(recipeName));
  try {
    const response = await fetch(
      `includes/getrecipe.php?name=${encodeURIComponent(recipeName)}`
    );
    const data = await response.json();

    if (data.error) {
      console.error("Error:", data.error);
      document.getElementById("recipe-title").textContent = "Recipe not found";
      return;
    }

    // Set recipe fields
    document.getElementById("recipe-title").textContent = data.title;
    document.getElementById("recipe-description").textContent =
      data.description;
    document.getElementById(
      "recipe-time"
    ).textContent = `${data.total_time} minutes`;
    document.getElementById(
      "recipe-servings"
    ).textContent = `${data.servings} servings`;
    document.getElementById("recipe-difficulty").textContent =
      data.difficulty_level;
    document.getElementById("recipe-date").textContent = new Date(
      data.date_added
    ).toLocaleDateString();

    if (data.image) {
      document.getElementById("recipe-image").src =
        "data:image/jpeg;base64," + data.image;
    }

    // List ingredients
    const ingredientsList = document.getElementById("recipe-ingredients");
    ingredientsList.innerHTML = "";
    data.ingredients.forEach((ing) => {
      const li = document.createElement("li");
      li.textContent =
        `${ing.quantity} ${ing.unit_of_measure} of ${ing.ingredient_name}` +
        (ing.preparation_notes ? ` (${ing.preparation_notes})` : "");
      ingredientsList.appendChild(li);
    });

    // Display categories
    const categoriesList = document.getElementById("categories");
    categoriesList.innerHTML = "";
    data.categories.forEach((cat) => {
      const li = document.createElement("li");
      li.textContent = cat;
      categoriesList.appendChild(li);
    });
  } catch (err) {
    console.error("Fetch error:", err);
  }
}

document.addEventListener("DOMContentLoaded", fetchRecipe);
