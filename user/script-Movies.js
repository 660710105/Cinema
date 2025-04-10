const navBar = document.querySelector(".navbar");
const lang = document.querySelector(".lang-menu");
const btnlang = document.querySelector(".selected-lang");

let focusColor = btnlang;
let enIcon = document.getElementById("icon-en");
let thIcon = document.getElementById("icon-th");

const changelangBtn = document.querySelector(".change-lang");
if (thIcon) {
  thIcon.addEventListener("click", () => {
    changelangBtn.innerHTML = "TH";
    window.location.href = "MoviesTH.php";
  });
}

if (enIcon) {
  enIcon.addEventListener("click", () => {
    changelangBtn.innerHTML = "EN";
  });
}

if (lang) {
  lang.addEventListener("click", () => {
    lang.classList.toggle('display');
    if (focusColor && focusColor.innerHTML.includes("EN")) {
      if (enIcon) enIcon.style.color = `#fff`;
    } else {
      if (enIcon) enIcon.style.color = `#000`;
    }
    if (focusColor && focusColor.innerHTML.includes("TH")) {
      if (thIcon) thIcon.style.color = `#fff`;
    } else {
      if (thIcon) thIcon.style.color = `#000`;
    }
  });
}

let prevScrollPos = window.scrollY;
window.addEventListener("scroll", () => {
  let currScrollpos = window.scrollY;

  if (navBar) {
    if (currScrollpos > prevScrollPos) {
      navBar.style.transform = `translateY(-105%)`;
    } else {
      navBar.style.transform = `translateY(0)`;
    }
  }

  prevScrollPos = currScrollpos;
});
// navBar

// Movie container
const movieContainerOnShow = document.querySelector('.movie-container.show');
const movieContainerInComing = document.querySelector('.movie-container.coming');
const nowBtn = document.querySelector('.movie-category.now');
const soonBtn = document.querySelector('.movie-category.soon');

if (nowBtn) {
  nowBtn.addEventListener('click', () => {
    if (soonBtn) soonBtn.classList.remove('active');
    nowBtn.classList.remove('active');
    if (movieContainerOnShow) movieContainerOnShow.classList.remove('close');
    if (movieContainerInComing) movieContainerInComing.classList.remove('open');
  });
}

if (soonBtn) {
  soonBtn.addEventListener('click', () => {
    soonBtn.classList.add('active');
    nowBtn.classList.add('active');
    if (movieContainerOnShow) movieContainerOnShow.classList.add('close');
    if (movieContainerInComing) movieContainerInComing.classList.add('open');
  });
}

// Search bar toggle
document.addEventListener('DOMContentLoaded', function () {
  const searchToggleButton = document.getElementById('searchToggleButton');
  const searchBarContainer = document.getElementById('searchBarContainer');
  const searchIconImg = document.getElementById('searchIcon');
  const plusIcon = './pictures/icon-search.svg';
  const minusIcon = './pictures/icon-close.svg';

  if (searchToggleButton && searchBarContainer && searchIconImg) {
    searchToggleButton.addEventListener('click', function () {
      searchBarContainer.classList.toggle('open');

      if (searchIconImg.getAttribute('src') === plusIcon) {
        searchIconImg.setAttribute('src', minusIcon);
      } else {
        searchIconImg.setAttribute('src', plusIcon);
      }
    });
  }
});