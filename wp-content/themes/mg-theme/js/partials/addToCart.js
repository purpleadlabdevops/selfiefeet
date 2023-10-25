(function(){

	function addToCartFunction(el, id, q){
		var formData = new FormData();

		formData.append("action", "addToCart");
		formData.append("p_id", id);
		formData.append("p_q", q);

		var request = new XMLHttpRequest();
		request.open('POST', data.ajax, true);

		request.onload = function() {

			if (this.status >= 200 && this.status < 400) {
				const result = JSON.parse(this.response)
				document.querySelector('.header__cart span').innerHTML = result.count
				setTimeout(()=>{
				  el.innerHTML = 'Thank you!'
				  setTimeout(()=>{
					  window.location.href = data.checkout;
					}, 500)
				}, 500)
			} else {
				alert('Something went wrong, please reload page and try againe!')
			}
		}

		request.onerror = function() {
			console.log(this.response);
		}

		request.send(formData)
	}

// Add to cart
	let addToCart = document.querySelectorAll('.addToCart')
	addToCart.forEach(cartButton => {
		cartButton.addEventListener('click', e => {
		  e.preventDefault()
		  e.target.innerHTML = 'Additting...'
		  addToCartFunction(e.target, e.target.dataset.id, e.target.dataset.qty)
		})
	})

	function addToCartFormFunction(id, q){
		var formData = new FormData();

		formData.append("action", "addToCart");
		formData.append("p_id", id);
		formData.append("p_q", q);

		var request = new XMLHttpRequest();
		request.open('POST', data.ajax, true);

		request.onload = function() {
			document.querySelector('.product__loader').classList.remove('active')
			if (this.status >= 200 && this.status < 400) {
				const result = JSON.parse(this.response)
				document.querySelector('.header__cart span').innerHTML = result.count
				console.log(this.response);

				document.getElementById('addToCart').classList.add('added')
				setTimeout(()=>{
				  document.getElementById('addToCart').classList.remove('added')
				  document.querySelector('.product__form button span').innerHTML = 'Thank you!'
				  setTimeout(()=>{
					  window.location.href = data.checkout;
					}, 500)
				}, 500)
			} else {
				alert('Something went wrong, please reload page and try againe!')
			}
		}

		request.onerror = function() {
			console.log(this.response);
		}

		request.send(formData)
	}

	document.getElementById('addToCart').addEventListener('submit', e => {
	  e.preventDefault()
	  document.querySelector('.product__loader').classList.add('active')
	  document.querySelector('.product__form button span').innerHTML = 'Additting...'
	  addToCartFormFunction(e.target.dataset.id, document.getElementById('productQty').value)
	})

})();