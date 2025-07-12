const burger = document.querySelector('.header__burger'); // выбираем по классу
const menu = document.querySelector('.nav'); // выбираем по классу
const overlay = document.getElementById('overlay'); // по ID

function toggleMenu() {
  menu.classList.toggle('open');
  overlay.classList.toggle('active');
}

burger.addEventListener('click', toggleMenu);
overlay.addEventListener('click', toggleMenu);

const element = document.getElementById("phone");
      const maskOptions = {
        mask: "+{7}(000)000-00-00",
        lazy: false,
      };
      const mask = IMask(element, maskOptions);