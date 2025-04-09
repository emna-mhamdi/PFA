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
      document.getElementById("recipe_title").textContent = "Recipe not found";
      return;
    }

    // Set recipe fields
    document.getElementById("recipe_title").textContent = data.title;
    document.getElementById("recipe-description").textContent =
      data.description;
    document.getElementById(
      "recipe-time"
    ).textContent = `${data.total_time} minutes`;
    document.getElementById(
      "recipe-servings"
    ).textContent = `${data.servings} servings`;

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
    // Set summary: "~ 5 ingredients / 20 minutes / Easy"
    const summarySpan = document.getElementById("recipe-summary");
    summarySpan.textContent = `~ ${data.ingredient_count} ingredients / ${data.total_time} minutes / ${data.difficulty_level}`;
    // Show nutrition info as <ul><li>protein: X</li>...</ul>
    const nutrition = data.nutrition;
    const nutritionList = document.getElementById("recipe-nutrition");
    nutritionList.innerHTML = "";

    if (nutrition) {
      const nutrients = [
        { label: "protein", value: nutrition.protein },
        { label: "carbs", value: nutrition.carbs },
        { label: "fats", value: nutrition.fats },
      ];

      nutrients.forEach((nutrient) => {
        const li = document.createElement("li");
        li.textContent = `${nutrient.label} : ${nutrient.value}g`;
        nutritionList.appendChild(li);
      });
    } else {
      const li = document.createElement("li");
      li.textContent = "Nutrition data not available.";
      nutritionList.appendChild(li);
    }
    // Display instructions
    const instructionsList = document.getElementById("recipe-instructions");
    instructionsList.innerHTML = "";
    data.instructions.forEach((step) => {
      const li = document.createElement("li");

      const span = document.createElement("span");
      span.textContent = String(step.step_number).padStart(2, "0") + ".";

      li.appendChild(span);
      li.append(" " + step.instruction_text);
      instructionsList.appendChild(li);
    });
  } catch (err) {
    console.error("Fetch error:", err);
  }
}

document.addEventListener("DOMContentLoaded", fetchRecipe);
