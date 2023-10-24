(function(){

  const form = document.getElementById('consultForm'),
        position = document.getElementById('position'),
        name = document.getElementById('name'),
        phone = document.getElementById('phone'),
        email = document.getElementById('email'),
        summary = document.getElementById('summary'),
        validateEmail = email => {
          return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
          )
        },
        validateFile = file => {
          const maxSize = 1024 * 1024; // 1MB
          return file.files[0].size > maxSize ? false : true
        }

  document.querySelector('.step__two').addEventListener('click', e => {
    e.preventDefault();
    document.querySelector('.step__1').classList.remove('step__active')
    document.querySelector('.step__2').classList.add('step__active')
  })

  document.querySelector('.step__three').addEventListener('click', e => {
    e.preventDefault();
    if(name.value.length < 2) {
      name.classList.add('err')
      setTimeout(() => name.classList.remove('err'), 1000);
    } else if(phone.value.length < 10) {
      phone.classList.add('err')
      setTimeout(() => phone.classList.remove('err'), 1000);
    } else if(!validateEmail(email.value)){
      email.classList.add('err')
      setTimeout(() => email.classList.remove('err'), 1000);
    } else {
      document.querySelector('.step__2').classList.remove('step__active')
      document.querySelector('.step__3').classList.add('step__active')
    }
  })

  form.addEventListener('submit', e => {
    e.preventDefault();
    console.dir(summary);
    if(validateFile(summary)){
      document.querySelector('.field__loader').classList.add('field__loader-active')
      requestAction([{
        action: 'consultAction',
        position: position.value,
        name: name.value,
        phone: phone.value,
        email: email.value,
        summary: summary.files[0],
      }], result => {
        document.querySelector('.field__loader').classList.remove('field__loader-active')
        const data = JSON.parse(result)
        console.dir(data);
        if(data.status == 'success'){
          form.reset()
          document.querySelector('.step__3').classList.remove('step__active')
          document.querySelector('.step__4').classList.add('step__active')
          setTimeout(() => {
            document.querySelector('.step__4').classList.remove('step__active')
            document.querySelector('.step__1').classList.add('step__active')
          }, 5000);
        } else if(data.status == 'error') {
          alert(data.msg);
        }
      })
    } else {
      summary.classList.add('err')
      alert('File size must be less than 1MB');
      setTimeout(() => summary.classList.remove('err'), 1000);
    }
  })

})();