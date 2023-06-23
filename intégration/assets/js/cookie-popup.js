/* Popup #1 add */
document.querySelector('.cookie-consent-element').addEventListener('click', function () {
  this.classList.add('display-none');

  document.querySelector('.cookie-popup-element').classList.remove('display-none')

})

/* Popup #02 add */
document.querySelector('#preferencies').addEventListener('click', function () {
  document.querySelector('.cookie-popup-element-two').classList.remove('display-none');

  document.querySelector('.cookie-popup-element').classList.add('display-none')

})

/* Popups remove via cross icon */
let cross = document.querySelectorAll('.cookie-popup-cross-icon')
cross.forEach(function (element) {
  element.addEventListener('click', function () {
    console.log('cross icon clicked!');
    document.querySelector('.cookie-consent-element').classList.remove('display-none');

    document.querySelector('.cookie-popup-element').classList.add('display-none');
    document.querySelector('.cookie-popup-element-two').classList.add('display-none');
  });
});

/* Fake validation */
let validate = document.querySelectorAll('.validate')
validate.forEach(function (element) {
  element.addEventListener('click', function () {
    console.log('cross icon clicked!');
    document.querySelector('.cookie-consent-element').classList.remove('display-none');

    document.querySelector('.cookie-popup-element').classList.add('display-none');
    document.querySelector('.cookie-popup-element-two').classList.add('display-none');
  });
});

/* Fake decline */
let decline = document.querySelectorAll('.decline')
decline.forEach(function (element) {
  element.addEventListener('click', function () {
    console.log('cross icon clicked!');
    document.querySelector('.cookie-consent-element').classList.remove('display-none');

    document.querySelector('.cookie-popup-element').classList.add('display-none');
    document.querySelector('.cookie-popup-element-two').classList.add('display-none');
  });
});


/* Accordion */
document.querySelector('.functon-accordion-btn').addEventListener('click', function () {
  let content = this.nextElementSibling;
  let arrow = document.querySelector('.function-accordion-arrow');

  content.classList.toggle('show');
  content.classList.toggle('display-none');
  arrow.classList.toggle('up');
});

document.querySelector('.stats-accordion-btn').addEventListener('click', function () {
  let content = this.nextElementSibling;
  let arrow = document.querySelector('.stats-accordion-arrow');

  content.classList.toggle('show');
  content.classList.toggle('display-none');
  arrow.classList.toggle('up');
});

document.querySelector('.market-accordion-btn').addEventListener('click', function () {
  let content = this.nextElementSibling;
  let arrow = document.querySelector('.market-accordion-arrow');

  content.classList.toggle('show');
  content.classList.toggle('display-none');
  arrow.classList.toggle('up');
});