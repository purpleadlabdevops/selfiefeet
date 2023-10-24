(function(){

  const faqTitle = document.querySelectorAll('.faq__title')
  faqTitle.forEach(el => {
    el.addEventListener('click', e => {
      e.preventDefault()
      e.target.parentNode.classList.toggle('active')
    })
  })

})();