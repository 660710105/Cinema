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
    window.location.href = "Captain-America.php";
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
// navBar