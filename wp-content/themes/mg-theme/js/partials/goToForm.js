(function(){

  const goToForm = document.querySelectorAll('.goToForm')
  goToForm.forEach(el => {
    el.addEventListener('click', e => {
      e.preventDefault();
      if(data.isFrontPage){
        document.querySelector('.banner').scrollIntoView({block: "start", behavior: "smooth"})
      } else {
        window.location.replace(`${data.frontPage}#banner`)
      }
    })
  })

})();