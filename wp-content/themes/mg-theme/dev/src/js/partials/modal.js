(function(){
  setTimeout(()=>{
    const openModal = document.querySelectorAll('[data-modal]')
    openModal.forEach(el => {
      el.addEventListener('click', e => {
        e.preventDefault()
        document.getElementById(el.dataset.modal).classList.add('modal-active')
        document.documentElement.style.overflow = 'hidden'
        document.documentElement.style.height = '100vh';
        document.documentElement.style.width = '100vw';
      })
    })

    const closeModal = document.querySelectorAll('.modal__close')
    closeModal.forEach(el => {
      el.addEventListener('click', e => {
        e.preventDefault()
        console.log(111);
        document.querySelector('.modal-active').classList.remove('modal-active')
        document.documentElement.style.overflow = 'auto'
        document.documentElement.style.height = 'auto';
        document.documentElement.style.width = 'auto';
      })
    })
  }, 50);
})();