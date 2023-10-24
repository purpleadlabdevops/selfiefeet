(function(){

  const scrollToButtons = document.querySelectorAll('.scrollTo')
  scrollToButtons.forEach(scrollTo => {
    scrollTo.addEventListener('click', e => {
      e.preventDefault()
      document.querySelector(`.${scrollTo.dataset.scrollTo}`).scrollIntoView({block: "start", behavior: "smooth"})
    })
  })

})();