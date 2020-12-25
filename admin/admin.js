const navToggle = document.getElementById('btn-toggle');
navToggle.addEventListener('click',function(){
    var navBar = document.querySelector('.slide-nav-menu');
    var mainContainer = document.querySelector('.content');
    navBar.classList.toggle('animation');
    mainContainer.classList.toggle('animation');
});

const main = document.getElementById('main');
const listNav = document.querySelectorAll('.slide-nav__link')
listNav.forEach(function(element){
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
});

const deleteProduct = document.querySelectorAll('.xoa-sanpham');
deleteProduct.forEach(function(elemet){
    elemet.addEventListener('click',function(){
        var needDelete = elemet.parentElement.parentElement;
        idDelete = needDelete.querySelector('th').innerText;
        needDelete.remove();
    });
});
