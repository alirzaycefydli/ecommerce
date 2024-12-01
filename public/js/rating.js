// Function to handle rating selection
function setRating(value) {
    // Set the rating value in the hidden input
    document.getElementById('rating').value = value;

    // Change the color of the stars based on the selected rating
    const stars = document.querySelectorAll('.rating-container button');
    stars.forEach(star => {
        if (parseInt(star.getAttribute('data-value')) <= value) {
            star.style.color = '#fea99a'; // Selected color
        } else {
            star.style.color = '#777'; // Unselected color
        }
    });

    // Enable the submit button when a rating is selected
    document.getElementById('submit-btn').disabled = false;
}

// Ensure at least one star is selected by default (set initial state)
document.addEventListener('DOMContentLoaded', function() {
    setRating(5); // Default to 5 stars selected
});

// Form validation on submit
document.getElementById('rating-form').addEventListener('submit', function(event) {
    const ratingValue = document.getElementById('rating').value;

    // Prevent form submission if no rating is selected (although it will default to 1)
    if (!ratingValue) {
        alert("Please select a rating before submitting!");
        event.preventDefault(); // Prevent the form from submitting
    }
});
