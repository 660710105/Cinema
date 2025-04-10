// navBar
const navBar = document.querySelector(".navbar");
const lang = document.querySelector(".lang-menu");
const btnlang = document.querySelector(".selected-lang");

let focusColor = btnlang;
let enIcon = document.getElementById("icon-en");
let thIcon = document.getElementById("icon-th");

const changelangBtn = document.querySelector(".change-lang");
thIcon.addEventListener("click", () => {
    changelangBtn.innerHTML = "TH";
})

enIcon.addEventListener("click", () => {
    changelangBtn.innerHTML = "EN";
    window.location.href = "Home.php"
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
function notActive(){
    if(wrapper.classList.contains("active","active-popup")){
        wrapper.classList.remove("active", "active-popup");
    }else{
        wrapper.classList.remove('active-popup');
    }
}
function active(){
    wrapper.classList.add("active-popup");
}

document.addEventListener("click", e =>{
    if(!lang.contains(e.target) && e.target !== btnlang){
        lang.classList.remove('display');
    }
    if(!wrapper.contains(e.target) && e.target !== iconClose && e.target !== LoginPopup 
    && e.target !== menuLeft[0] && e.target !== menuLeft[1] && e.target !== menuLeft[2]
    && e.target !== cardBtn[0] && e.target !== cardBtn[1] && e.target !== cardBtn[2] && e.target !== cardBtn[3] && e.target !== cardBtn[4]){
        notActive();
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

// navBar

// login
const wrapper = document.querySelector(".wrapper")
const loginlink = document.querySelector(".login-link")
const registerlink = document.querySelector(".register-link")
const LoginPopup = document.querySelector(".btn-login")
const iconClose = document.querySelector(".icon-close")

registerlink.addEventListener("click", () => {
    wrapper.classList.add('active');
});

loginlink.addEventListener("click", () => {
    wrapper.classList.remove('active');
});

LoginPopup.addEventListener("click", () => {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener("click", () => {
    notActive();
});

const menuLeft = [...document.querySelectorAll('.pls-login')];
for (let i = 0; i < 3; i++) {
    menuLeft[i].addEventListener('click',()=>{
        active();
    })
}
// login

// Movie container
const movieContainer = [...document.querySelectorAll('.movie-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

movieContainer.forEach((item, i) => {
    let containerDimentions = item.getBoundingClientRect();
    let containerWidth = containerDimentions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })
    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})

const cardBtn = [...document.querySelectorAll('.card-btn')];
for (let index = 0; index < cardBtn.length; index++) {
    cardBtn[index].addEventListener('click',()=>{
        active();
    })
}
