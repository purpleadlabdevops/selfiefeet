(function(){

  const anims = document.querySelectorAll('[data-anim]'),
        offset = el => {
          const rect = el.getBoundingClientRect(),
                scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
                scrollTop  = window.pageYOffset || document.documentElement.scrollTop
          return {
            top: rect.top + scrollTop,
            left: rect.left + scrollLeft
          }
        },
        animFun = () => {
          anims.forEach(anim => {
            const animOffset = offset(anim).top,
                  animStart = 6
            let animPoint = window.innerHeight - anim.offsetHeight / animStart
            if(anim.offsetHeight > window.innerHeight) {
              animPoint = window.innerHeight - window.innerHeight / animStart
            }
            anim.style.animationDelay = `${anim.dataset.animDelay}s`;
            if((pageYOffset > animOffset - animPoint) && pageYOffset < (animOffset + anim.offsetHeight)) {
              anim.classList.add(`animate__${anim.dataset.anim}`)
              anim.classList.add(`animate__animated`)
            }
          })
        }
  window.addEventListener('scroll', animFun)
  animFun()

})();