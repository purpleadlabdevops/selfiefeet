(function(){

  const email = document.getElementById('subscriber_email'),
        form = document.getElementById('subscribeForm'),
        validateEmail = email => {
          return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
          )
        }

  form.addEventListener('submit', e => {
    e.preventDefault();
    console.log('subbmit');
    if(validateEmail(email.value)){
      document.querySelector('.subscribe__loader').classList.add('subscribe__loader-active')
      requestAction([{
        action: 'subscribeAction',
        email: email.value,
      }], result => {
        document.querySelector('.subscribe__loader').classList.remove('subscribe__loader-active')
        const data = JSON.parse(result)
        console.dir(data);
        if(data.status == 'success'){
          form.reset()
          document.querySelector('.subscribe__thanks').classList.add('subscribe__thanks-active')
          setTimeout(() => {
            document.querySelector('.subscribe__thanks').classList.remove('subscribe__thanks-active')
          }, 5000);
        } else if(data.status == 'error') {
          alert(data.msg);
        }
      })
    } else {
      email.classList.add('err')
      setTimeout(() => email.classList.remove('err'), 1000);
    }
  })

})();