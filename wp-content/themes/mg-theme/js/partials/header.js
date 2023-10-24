(function(){

  const header = document.querySelector('.header')
  document.addEventListener('scroll', () => {
    if(window.scrollY >= 46){
      header.style.position = 'fixed'
      header.style.top = '0px'
      header.style.paddingTop = '5px'
      header.style.paddingBottom = '5px'
    } else {
      header.style.position = 'absolute'
      header.style.top = '35px'
      header.style.paddingTop = '20px'
      header.style.paddingBottom = '20px'
    }
  })

  document.querySelector('.header__btn').addEventListener('click', e => {
    e.preventDefault()
    document.querySelector('.header__nav').classList.toggle('active')
    e.target.classList.toggle('active')
  })

})();