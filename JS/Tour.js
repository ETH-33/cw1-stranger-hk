// script.js

// Get the tour details container element
var tourDetails = document.getElementById("tourDetails");

// Get the tour buttons
var buttons = document.getElementsByClassName("tour-btn");

// Add event listeners to the buttons
for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener("click", showTourDetails);
}

// Function to show the tour details
function showTourDetails() {
  // Get the data attributes of the clicked button
  var tourTitle = this.getAttribute("data-title");
  var tourDifficulty = this.getAttribute("data-difficulty");
  var tourPrice = this.getAttribute("data-price");
  var tourHighlights = this.getAttribute("data-highlights");

  // Create HTML markup for the tour details
  var markup =
    "<h2>" +
    tourTitle +
    "</h2>" +
    "<p>Difficulty: " +
    tourDifficulty +
    "</p>" +
    "<p>Price: " +
    tourPrice +
    "</p>" +
    "<p>Highlights:</p>" +
    "<ul>" +
    "<li>" +
    tourHighlights.split(",").join("</li><li>") +
    "</li>" +
    "</ul>";

  // Set the tour details markup
  tourDetails.innerHTML = markup;
}
