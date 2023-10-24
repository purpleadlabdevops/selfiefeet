//= partials/ajaxRequest.js
//= partials/tiny-slider.js
//= partials/header.js
//= partials/scrollTo.js
//= partials/faq.js
//= partials/subscribe.js
//= partials/addToCart.js

const productQty = document.getElementById('productQty')

document.getElementById('productQtyMinus').addEventListener('click', e => {
  e.preventDefault()
  productQty.value = Number(productQty.value) === 1 ? 1 : Number(productQty.value) - 1
})

document.getElementById('productQtyPlus').addEventListener('click', e => {
  e.preventDefault()
  productQty.value = Number(productQty.value) === 100 ? 100 : Number(productQty.value) + 1
})

const productGalleryNav = document.querySelectorAll('.product__gallery-nav img')
productGalleryNav.forEach(el => {
  el.addEventListener('click', e => {
    e.preventDefault()
    productGalleryNav.forEach(item => item.classList.remove('active'))
    document.querySelector('.product__gallery-img').src = e.target.src
    e.target.classList.add('active')
  })
})