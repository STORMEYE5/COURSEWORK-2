function sortProducts() {
    var products = document.getElementById('product-card');
    var productArray = Array.from(products.children);
    productArray.sort(function(a, b) {
      var priceA = parseFloat(a.querySelector('p:nth-child(3)').textContent.substring(2));
      var priceB = parseFloat(b.querySelector('p:nth-child(3)').textContent.substring(2));
      console.log(priceA);
      console.log(priceB);
      return priceA - priceB;
    });
    products.innerHTML = '';
    productArray.forEach(function(product) {
      products.appendChild(product);
    });
  }