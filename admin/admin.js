const navToggle = document.getElementById('btn-toggle');
navToggle.addEventListener('click',function(event){
    var navBar = document.querySelector('.slide-nav-menu');
    var mainContainer = document.querySelector('.content');
    navBar.classList.toggle('animation');
    mainContainer.classList.toggle('animation');
});

const main = document.getElementById('main');
const listNav = document.querySelectorAll('.slide-nav__link')
for (const index in listNav) {
    if (Object.hasOwnProperty.call(listNav, index)) {
        const element = listNav[index];
        element.addEventListener('click',function(){
            redirectName = element.getAttribute('value');
            display = document.getElementById(redirectName);
            item = document.querySelectorAll('.container-fluid');
            item.forEach(function(i){
                if (i.hidden === false ) {
                    i.hidden = true
                }
            });
            display.hidden = false;
        });

    }
}