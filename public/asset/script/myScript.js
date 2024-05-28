


// Counter Button

let currentValue = 0;

function updateValue(amount) {
  currentValue += amount;
  document.getElementById('display').innerText = currentValue;
}


// Product Images Gallery

let product_img = document.querySelector('.product-img img');
let product_thumbnail = document.querySelectorAll('.product-thumbnail');

product_thumbnail.forEach((product) => {
  product.addEventListener('click', () => {
    product_thumbnail.forEach((product) => {
      product.classList.remove('active');
    });
    product.classList.add('active');

    let img = product.querySelector('img').getAttribute('src');
    let index = product.querySelector('img').getAttribute('data-index');

    product_img.setAttribute('src', img);
    product_img.setAttribute('data-index', index);

    product_img.classList.add('product-down-animation');
    setTimeout(() => {
      product_img.classList.remove('product-down-animation');
    }, 500);
  });
});


 
 
var navbar = document.querySelector('.navbar');
var cartBadge = document.querySelector('.cart-badge');

window.addEventListener('scroll', function() {
    if ((window.scrollY > 50 && !cartBadge) || (cartBadge && parseInt(cartBadge.innerText) > 0)) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
});

// Function to update cart badge quantity
function updateCartQuantity(quantity) {
    if (cartBadge) {
        cartBadge.innerText = quantity;
    }
}





 

