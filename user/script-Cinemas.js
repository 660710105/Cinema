const navBar = document.querySelector(".navbar");
const lang = document.querySelector(".lang-menu");
const btnlang = document.querySelector(".selected-lang");

let focusColor = btnlang;
let enIcon = document.getElementById("icon-en");
let thIcon = document.getElementById("icon-th");

const changelangBtn = document.querySelector(".change-lang");
thIcon.addEventListener("click", () => {
    changelangBtn.innerHTML = "TH";
    window.location.href = "./CinemasTH.php"
})

enIcon.addEventListener("click", () => {
    changelangBtn.innerHTML = "EN";
})

lang.addEventListener("click", ()=> {
    lang.classList.toggle('display');
    if(focusColor.innerHTML.includes("EN")){
        enIcon.style.color = `#fff`;
    }else{
        enIcon.style.color = `#000`;
    }
    if(focusColor.innerHTML.includes("TH")){
        thIcon.style.color = `#fff`;
    }else{
        thIcon.style.color = `#000`;
    }
});

let prevScrollPos = window.scrollY;
window.addEventListener("scroll", () => {
    let currScrollpos = window.scrollY;

    if(currScrollpos > prevScrollPos) {
        navBar.style.transform = `translateY(-105%)`;
    }else {
        navBar.style.transform = `translateY(0)`;
    }

    prevScrollPos = currScrollpos;
});

// Cinema

const CinemaHeader = [...document.querySelectorAll('.cinema-header-row')]
let aOfHeader = [...document.querySelectorAll('.cinema-header-row a')]
const bigCinemaPanel = [...document.querySelectorAll('.box-cinema-panel-big')]
CinemaHeader.forEach(() => {
    aOfHeader[0].addEventListener('click',() => {
        aOfHeader[0].classList.remove('active');
        aOfHeader[0].classList.add('active');
        aOfHeader[1].classList.remove('active');
        bigCinemaPanel[0].style.display = `block`;
        bigCinemaPanel[1].style.display = `none`;
    })
    aOfHeader[1].addEventListener('click',() => {
        aOfHeader[1].classList.remove('active');
        aOfHeader[1].classList.add('active');
        aOfHeader[0].classList.remove('active');
        bigCinemaPanel[0].style.display = `none`;
        bigCinemaPanel[1].style.display = `block`;
    })
})

const header1 = document.querySelector('#location-bkk-Z13');
let collapse1 = document.querySelector('#LBKK_Z13');
let arrow1 = document.querySelector('#location-bkk-Z13 > h2 > a > div');

header1.addEventListener('click', ()=> {
    collapse1.classList.toggle('show');
    arrow1.classList.toggle('up');
})

const header2 = document.querySelector('#cinema-flagship-B3');
let collapse2 = document.querySelector('#Cinema_flagship_B3');
let arrow2 = document.querySelector('#cinema-flagship-B3 > h2 > a > div');

header2.addEventListener('click', ()=> {
    collapse2.classList.toggle('show');
    arrow2.classList.toggle('up');
})

const header3 = document.querySelector('#cinema-flagship-B4');
let collapse3 = document.querySelector('#Cinema_flagship_B4');
let arrow3 = document.querySelector('#cinema-flagship-B4 > h2 > a > div');

header3.addEventListener('click', ()=> {
    collapse3.classList.toggle('show');
    arrow3.classList.toggle('up');
})