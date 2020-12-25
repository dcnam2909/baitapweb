var btnAddToCart = document.querySelectorAll('.add-to-cart');
var inCart = JSON.parse(localStorage.getItem('products'));
btnAddToCart.forEach(function(element){
    element.addEventListener('click',addToCart);
    function addToCart(){
        while(!element.classList.contains('item')){
            element = element.parentElement;
        }
        var img = element.querySelector('a img').src;
        var name = element.querySelector('.item__info .item--name a').textContent;
        var url =  element.querySelector('.item__info .item--name a').href;
        var price = element.querySelector('.item__info .item--price .price-discount').textContent;
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
                counts: count
            })
        } else {inCart.forEach(function(a){
            if (a.names === name) {
                a.counts +=1;
            }
        })}
        cartRender();
        localStorage.setItem('products',JSON.stringify(inCart));
    }
});


function cartRender(){
    var cart = document.getElementById('cart');
    var content = inCart.map(function(item){
        return `<div class=" cart-item d-flex justify-content-between border border-dark rounded p-2">
        <img class="border-light rounded" src="${item.images}" alt="" srcset="">
        <div class="cart-item__info d-flex flex-column justify-content-around">
            <a href="${item.urls}" class="cart-item__name">${item.names}</a>
            <div class="cart-item__price d-flex align-items-center">
                <span class="item__price pr-2">${item.prices}</span><span style="color: black;font-weight: bolder;">&times;</span>
                <input class="item__count ml-2" type="number" name="item-count" id="item-count "min="1" value="${item.counts}">
            </div>
        </div>
        <button class="btn btn-dark btn-outline-light delete-item rounded-circle">&times;</button>
        </div>`;
    });
    cart.innerHTML = content.join('');
}
cartRender();


//checkout

function checkOutRender(){
    var checkout = document.getElementById('checkout-item');

    var content = inCart.map(function(item){
        return `<div class="checkout-item mb-3 shadow">
        <div class="checkout-item__img">
            <img src="${item.images}" alt="">
        </div>
        <div class="checkout-item__content">
            <div class="checkout-item__info">
                <a href="${item.urls}" class="checkout-item__name-link"><div class="checkout-item__name">${item.names}</div></a>
                <div class="checkout-item__price">
                    <span class="checkout-item__price--discount">${item.price} <u>đ</u></span>
                </div>
            </div>
            <div class="checkout-item__control">
                <div class="control-group">
                    <button class="btn btn-outline-primary checkout-item__control--minus">&minus;</button>
                    <input type="tel" name="checkout-item__control--count" value="${item.counts}" class="checkout-item__control--count">
                    <button class="btn btn-outline-primary checkout-item__control--plus">&plus;</button>
                </div>
                <button class="btn btn-primary checkout-item__control--delete">&times;</button>
            </div>
            </div>
        </div>`;
    });
    checkout.innerHTML = content.join('');
}

checkOutRender();