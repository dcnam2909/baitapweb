var navToggle = document.getElementById('btn-toggle');
navToggle.addEventListener('click',function(){
    var navBar = document.querySelector('.slide-nav-menu');
    var mainContainer = document.querySelector('.content');
    navBar.classList.toggle('animation');
    mainContainer.classList.toggle('animation');
});

var main = document.getElementById('main');
var listNav = document.querySelectorAll('.slide-nav__link')
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

var deleteProductBtns = document.querySelectorAll('.xoa-sanpham');
deleteProductBtns.forEach(function(deleteProductBtn){
    deleteProductBtn.addEventListener('click',function(){
        while (!deleteProductBtn.classList.contains('hanghoa-item')){
            deleteProductBtn = deleteProductBtn.parentElement;
        }
        var idHH = deleteProductBtn.querySelector('.hanghoa-id').innerText;
        deleteProductBtn.remove();
        $.ajax({
            type: "POST",
            url:'/B1706613/admin/product.php',
            dataTypes: 'json',
            data: {xoahanghoa: idHH},
            success: function(){
                alert('watit');
                window.location.reload();
            },
            error : function() {
                alert('Đã có lỗi xảy ra vui lòng thử lại');
            }
        });
    });
});


var btnXacNhanDHs = document.querySelectorAll('.donhang--btnxacnhan');
btnXacNhanDHs.forEach(function(btnXacNhanDH){
    btnXacNhanDH.addEventListener('click',function(){
        while (!btnXacNhanDH.classList.contains('donhang-item')){
            btnXacNhanDH = btnXacNhanDH.parentElement;
        }
        var idDH = btnXacNhanDH.querySelector('.donhang-id').innerText;
        $.ajax({
            type: "POST",
            url:'/B1706613/admin/product.php',
            dataTypes: 'json',
            data: {xacnhandonhang: idDH},
            success: function(){
                window.location.reload();
            },
            error : function() {
                alert('Đã có lỗi xảy ra vui lòng thử lại');
            }
        });
    });
});


