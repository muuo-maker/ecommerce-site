// script.js
var i = 0;
var images = [];
var time = 2000;
var fadeTime = 500;

images[0] = 'images/stationery.jpeg';
images[1] = 'images/footware.jpeg';
images[2] = 'images/groceries.jpeg';
images[3] = 'images/refreshments.jpeg';
images[4] = 'images/kitchen_utensils.jpeg';
images[5] = 'images/beauty.jpeg';
images[6] = 'images/electronics.jpeg';

function changeImage() {
    var slide = document.querySelector('.slide');
    slide.style.opacity = 0;

    setTimeout(function() {
        slide.src = images[i];
        slide.style.opacity = 1;

        if (i < images.length - 1) {
            i++;
        } else {
            i = 0;
        }
    }, fadeTime);
    
    setTimeout(changeImage, time);
}

window.onload = changeImage;



var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");
function opentab(tabname){
    for(tablink of tablinks){
        tablink.classList.remove("active-link");
    }
    for(tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab");
    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab");
}

var sidemenu = document.getElementById("mobile-sidemenu");

function openmenu(){
    sidemenu.style.right = "0"
}
function closemenu(){
    sidemenu.style.right = "-375px"
}

const scriptURL = 'https://script.google.com/macros/s/AKfycbwhYyKIAzhW_aiiB5ZX6MU-VcZqokN82vXEX3JX2SCsYYlbYClGbR2SjXwkddmA_35D/exec'
const form = document.forms['submit-to-google-sheet']
const msg = document.getElementById("msg")
form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
    .then(response => {
        msg.innerHTML = "Message sent successfully!"
        setTimeout(function(){
            msg.innerHTML = ""
        },5000)
        form.reset()
    })
    .catch(error => console.error('Error!', error.message))
})

document.addEventListener('DOMContentLoaded', () => {
    const loginBtn = document.getElementById('loginBtn');
    const signUpBtn = document.getElementById('signUpBtn');
    const loginForm = document.getElementById('loginForm');
    const signUpForm = document.getElementById('signUpForm');
    const closeLogin = document.getElementById('closeLogin');
    const closeSignUp = document.getElementById('closeSignUp');
    const showLogin = document.getElementById('showLogin');
    const showSignUp = document.getElementById('showSignUp');

    // Show login form
    loginBtn.addEventListener('click', () => {
        loginForm.style.display = 'flex';
    });

    // Show sign-up form
    signUpBtn.addEventListener('click', () => {
        signUpForm.style.display = 'block';
    });

    // Close login form
    closeLogin.addEventListener('click', () => {
        loginForm.style.display = 'none';
    });

    // Close sign-up form
    closeSignUp.addEventListener('click', () => {
        signUpForm.style.display = 'none';
    });

    // Switch to login form
    showLogin.addEventListener('click', (event) => {
        event.preventDefault();
        signUpForm.style.display = 'none';
        loginForm.style.display = 'block';
    });

    // Switch to sign-up form
    showSignUp.addEventListener('click', (event) => {
        event.preventDefault();
        loginForm.style.display = 'none';
        signUpForm.style.display = 'block';
    });

    // Close forms when clicking outside of the modal content
    window.addEventListener('click', (event) => {
        if (event.target == loginForm) {
            loginForm.style.display = 'none';
        } else if (event.target == signUpForm) {
            signUpForm.style.display = 'none';
        }
    });
});


