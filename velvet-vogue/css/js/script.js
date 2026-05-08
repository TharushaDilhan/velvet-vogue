// Add to Cart demo
document.querySelectorAll(".add-to-cart").forEach(btn => {
  btn.addEventListener("click", () => {
    alert("Item added to cart (Demo)");
    window.location.href = "cart.html";
  });
});

