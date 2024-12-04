document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".plus-btn, .minus-btn").forEach(button => {
        button.addEventListener("click", function (event) {
            event.preventDefault();

            // Get the product ID, stock limit, and the quantity input element
            const productId = this.getAttribute("data-product-id");
            const stock = parseInt(this.getAttribute("max-stock")); // Stock value
            const input = this.closest(".qty-plus-minus-input").querySelector(".qty-input");
            let currentQty = parseInt(input.value);

            // Increment or decrement quantity
            if (this.classList.contains("plus-btn")) {
                if (currentQty < stock) {
                    currentQty++;
                } else {
                    alert('You have reached the maximum stock limit.');
                    return;
                }
            } else if (this.classList.contains("minus-btn")) {
                currentQty = Math.max(1, currentQty - 1); // Prevent quantity less than 1
            }

            // Update the quantity input value
            input.value = currentQty;

            // Calculate the new total price based on the unit price (which does not change)
            const pricePerUnit = parseFloat(document.querySelector(`#productPrice[data-product-id="${productId}"]`).dataset.pricePerUnit);
            const newTotalPrice = (pricePerUnit * currentQty).toFixed(2); // Price * Quantity

            // Format the total price to show thousands separator and proper decimal places
            const formattedTotalPrice = new Intl.NumberFormat('en-GB', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }).format(newTotalPrice);

            // Update the total price in the correct span (that shows price * quantity)
            const totalPriceSpan = this.closest('tr').querySelector('.total-price-span'); // Adjust according to your structure
            totalPriceSpan.innerText = `$${formattedTotalPrice}`;

            // Update session via AJAX (to persist changes in the cart)
            updateCartQuantity(productId, currentQty);
        });
    });


    // Function to send the updated quantity to the server
    function updateCartQuantity(productId, quantity) {
        fetch("/cart", {
            method: "PUT",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            },
            body: JSON.stringify({product_id: productId, quantity: quantity})
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log("Cart updated successfully!");
                } else {
                    console.error("Error updating cart:", data.message);
                }
            })
            .catch(error => console.error("Network error:", error));
    }
});
