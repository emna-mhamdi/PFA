document
  .getElementById("searchForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission

    const query = document.getElementById("searchInput").value.trim();
    if (query === "") {
      alert("Please enter a search term");
      return;
    }

    // Redirect to the search results page with the query in the URL
    window.location.href = `search_results.php?search_query=${encodeURIComponent(
      query
    )}`;
  });
