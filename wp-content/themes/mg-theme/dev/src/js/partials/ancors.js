(function(){

  const links = [],
        headerLinks = document.querySelectorAll('.header__menu a'),
        footerLinks = document.querySelectorAll('.footer__box-nav a'),
        slug = url => new URL(url).pathname.match(/[^\/]+/g),
        pageSlug = slug(window.location.href)

  slug(window.location.href).forEach()
  console.dir(pageSlug)

  links.push(...headerLinks)
  links.push(...footerLinks)
  links.forEach(link => {
    slug(link.href).forEach(sl => {
      // if(sl !== 'crewwaveyachts' && sl === pageSlug){

      // }
    })
  })

})();