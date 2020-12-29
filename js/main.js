var btnAddToCart = document.querySelectorAll('.add-to-cart');
var storage = JSON.parse(localStorage.getItem('products'));

//check localStorage

if (storage) {
    var inCart = JSON.parse(localStorage.getItem('products'));
} else inCart = [];
//Xoa gio hang

checkOutRender();
cartRender();
updateTotalCheckout();



//Them gio hang
btnAddToCart.forEach(function(btnAdd){
    btnAdd.addEventListener('click',function(){
        while(!btnAdd.classList.contains('item')){
            btnAdd = btnAdd.parentElement;
        }
        var img = btnAdd.querySelector('a img').src;
        var name = btnAdd.querySelector('.item__info .item--name a').textContent;
        var url =  btnAdd.querySelector('.item__info .item--name a').href;
        var price = btnAdd.querySelector('.item__info .item--price .price-discount').textContent;
        var count = 1;
        var result = inCart.find(function(item){
            if (item.names === name)
            return true;
        });
        if (!result){
            inCart.push({
                names : name,
                images : img,
                urls : url,
                prices: price,
                counts: count,
                id: url.split('id=')[1]
            })
        } else {inCart.forEach(function(a){
            if (a.names === name) {
                a.counts +=1;
            }
        })}
        cartRender();
        localStorage.setItem('products',JSON.stringify(inCart));
    });
});


function cartRender(){
    var cart = document.getElementById('cart');
    var content = inCart.map(function(item){
        return `
        <div class=" cart-item d-flex justify-content-between border border-dark rounded p-2">
            <img class="border-light rounded" src="${item.images}" alt="" srcset="">
            <div class="cart-item__info d-flex flex-column justify-content-around">
                <a href="${item.urls}" class="cart-item__name">${item.names}</a>
                <div class="cart-item__price d-flex align-items-center">
                    <span class="item__price pr-2">${item.prices}</span><span style="color: black;font-weight: bolder;">&times;</span>
                    <input class="item__count ml-2" type="number" name="item-count" min="1" value="${item.counts}">
                </div>
            </div>
            <button class="btn btn-dark btn-outline-light delete-item rounded-circle">&times;</button>
        </div>`;
    });
    cart.innerHTML = content.join('');
    var btnDeletes = document.querySelectorAll('.delete-item');
    var btnCounts = document.querySelectorAll('.item__count');
    btnDeletes.forEach(function(btnDelete){
        btnDelete.addEventListener('click', function(){
            while(!btnDelete.classList.contains('cart-item')){
                btnDelete = btnDelete.parentElement;
            }
            var name = btnDelete.querySelector('.cart-item__name').textContent;
            inCart.find(function(itemDelete,i){
                if (itemDelete.names === name){
                    inCart.splice(i,1);
                    localStorage.setItem('products',JSON.stringify(inCart));
                    cartRender();
                }
            });
            
        });
    });
    btnCounts.forEach(function(btnCount){
        btnCount.addEventListener('change',function(){
            parentCount = btnCount;
            while(!parentCount.classList.contains('cart-item')){
                parentCount = parentCount.parentElement;
            }
            var name = parentCount.querySelector('.cart-item__name').textContent;
            inCart.find(function(itemChange,i){
                if (itemChange.names === name){
                    itemChange.counts = parseInt(btnCount.value);
                    localStorage.setItem('products',JSON.stringify(inCart));

                }
            });
        })
    })
}

//checkout

function checkOutRender(){
    var checkout = document.getElementById('checkout-item');
    if (checkout){
        var content = inCart.map(function(item){
            return `<div class="checkout-item mb-3 shadow">
            <div class="checkout-item__img">
                <img src="${item.images}" alt="">
            </div>
            <div class="checkout-item__content">
                <div class="checkout-item__info">
                    <a href="${item.urls}" class="checkout-item__name-link"><div class="checkout-item__name">${item.names}</div></a>
                    <div class="checkout-item__price">
                        <span class="checkout-item__price--discount">${item.prices} </span>
                    </div>
                </div>
                <div class="checkout-item__control">
                    <input type="number" name="checkout-item__control--count" value="${item.counts}" class="checkout-item__control--count">
                    <button class="btn btn-primary checkout-item__control--delete">&times;</button>
                </div>
                </div>
            </div>`;
        });
        checkout.innerHTML = content.join('');
        var btnDeletes = document.querySelectorAll('.checkout-item__control--delete');
        var btnCounts = document.querySelectorAll('.checkout-item__control--count');
        btnDeletes.forEach(function(btnDelete){
            btnDelete.addEventListener('click', function(e){
                while(!btnDelete.classList.contains('checkout-item')){
                    btnDelete = btnDelete.parentElement;
                }
                var name = btnDelete.querySelector('.checkout-item__name').textContent;
                inCart.find(function(itemDelete,i){
                    if (itemDelete.names === name){
                        inCart.splice(i,1);
                        localStorage.setItem('products',JSON.stringify(inCart));
                        checkOutRender();
                        updateTotalCheckout();
                        cartRender();
                    }
                });
            });
        });
        btnCounts.forEach(function(btnCount){
            btnCount.addEventListener('change',function(){
                parentCount = btnCount;
                while(!parentCount.classList.contains('checkout-item')){
                    parentCount = parentCount.parentElement;
                }
                var name = parentCount.querySelector('.checkout-item__name').textContent;
                inCart.find(function(itemChange,i){
                    if (itemChange.names === name){
                        itemChange.counts = parseInt(btnCount.value);
                        localStorage.setItem('products',JSON.stringify(inCart));
                        cartRender();
                        updateTotalCheckout();
                    }
                });
            });
        });
        updateTotalCheckout();
    }
}

// checkout total 

function updateTotalCheckout(){
    var panelCheckout = document.querySelector('.checkout-panel');
    if (panelCheckout){
        var shipping = 10000;
        if (shipping){
            panelCheckout.querySelector('.checkout__shipping').innerHTML = `Shipping: <span>${shipping} <u>đ</u>`;
        }
        var panelCheckout = document.querySelector('.checkout-panel');
        var total = 0;
        inCart.forEach(function(item){
            price = parseFloat(item.prices.split(' ')[0]);
            count = parseInt(item.counts);
            total+= price * count;
        });
        panelCheckout.querySelector('.checkout__price').innerHTML = `Tổng: <span>${total} <u>đ</u></span></div>`;
        panelCheckout.querySelector('.checkout__total-discount').innerHTML = `Thanh toán: <span>${total + shipping} <u>đ</u>`;
    }
}



var checkoutBtn = $("#checkout--btn");
checkoutBtn.on('click',function(){
    var price = document.querySelector('.checkout__total-discount span').textContent.split(' ')[0]
    var clientName= document.querySelector('#checkout__name').value;
    var clientAddress= document.querySelector('#checkout__address').value;
    var clientPhone= document.querySelector('#checkout__phone').value;
    var billinfo = JSON.stringify({
        name: clientName,
        address: clientAddress,
        phone: clientPhone,
        total: price,
        product: inCart
    });
    
    $.ajax({
        type: "POST",
        url:'../admin/product.php',
        dataTypes: 'json',
        data: {bill: billinfo},
        success: function(){
            alert("Đặt hàng thành công chờ xác nhận!");
            inCart = [];
            localStorage.setItem('products',JSON.stringify(inCart));
            cartRender();
            checkOutRender();
            updateTotalCheckout();
        },
        error : function() {
            alert('Đã có lỗi xảy ra vui lòng thử lại');
        }
    });
});


var btnBuyNows = document.querySelectorAll('.buy-now');
btnBuyNows.forEach(function(btnBuyNow){
    btnBuyNow.addEventListener('click',function(){
        while(!btnBuyNow.classList.contains('item')){
            btnBuyNow = btnBuyNow.parentElement;
        }
        var img = btnBuyNow.querySelector('.item--img').src;
        var name = btnBuyNow.querySelector('.item--name a').innerText;
        var url = btnBuyNow.querySelector('.item--name a').href;
        if (url === "") {
            url = window.location.href;
        }
        var price = btnBuyNow.querySelector('.price-discount').innerText.split(' ')[0];
        var count = 1;
        var result = inCart.find(function(item){
            if (item.names === name)
            return true;
        });
        if (!result){
            inCart.push({
                names : name,
                images : img,
                urls : url,
                prices: price,
                counts: count,
                id: url.split('id=')[1]
            })
        } else {inCart.forEach(function(a){
            if (a.names === name) {
                a.counts +=1;
            }
        })}
        localStorage.setItem('products',JSON.stringify(inCart));
        window.location.href = "checkout.php";
    });
});

