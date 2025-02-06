let cart = [];

function addToCart() {
    cart.push({ name: "Stylish Chair", price: 199.99, quantity: 1 });
    alert("Item added to cart!");
    updateCart();
}

function updateCart() {
    let cartItems = document.getElementById("cart-items");
    cartItems.innerHTML = cart.map(item => `
        <tr>
            <td>${item.name}</td>
            <td>$${item.price}</td>
            <td>${item.quantity}</td>
            <td>$${item.price * item.quantity}</td>
        </tr>
    `).join("");
}
