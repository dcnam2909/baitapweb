
// CART
var removeCartBtn = document.getElementsByClassName('cart-item__delete')
var itemInCart = document.getElementsByClassName('cart-item__details')
var btnAddCart = document.getElementsByClassName('item--add-to-cart')
var namehh = document.getElementsByClassName('item__info--name')
var pricehh = document.getElementsByClassName('item__info--price')
var imghh = document.getElementsByClassName('item__img')
var totalText = document.getElementById('total')
var priceInCart = document.getElementsByClassName('cart-item__info--price')
var itemInCartID = document.getElementById('item-in-cart')
var addToCartBtn = document.getElementsByClassName('item--add-to-cart')
//update cart
function updateCart() {
    total =0
    for (let i = 0; i < itemInCart.length; i++) {
        a = parseInt(priceInCart[i].innerText.replaceAll(',',''))
        total += a
    }
    totalText.innerText = total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}

// remove cart


// buy button
function addToCart(name, price, imgSrc, itemSrc) {
    var item = `
        <a href="#"><img src="${imgSrc}"  class="cart-item__img"></a>
        <div class="cart-item__info">
            <a href="${itemSrc}" class="cart-item__info--name">${name}</a>
            <div class=cart-item__price-info>
                <span class="cart-item__info--amount">1</span> x
                <span class="cart-item__info--price">${price}</span> đ
            </div>
        </div>
        <button type="button" class="cart-item__delete" onclick="removeItem()">x</button>
    `

    var cartDiv = document.createElement('div')
    cartDiv.className = "cart-item__details"
    cartDiv.innerHTML = item
    itemInCartID.appendChild(cartDiv)
    updateCart()
}

for (let i =0; i<document.getElementsByClassName('item').length; i++){
    addToCartBtn[i].addEventListener('click', function(){
        var img = document.getElementsByClassName('item__img')[i].src
        var name = document.getElementsByClassName('item__info--name')[i].innerText
        var gia = document.getElementsByClassName('item__info--price')[i].innerText
        var nameSrc = document.getElementsByClassName('item__info--name')[i].href
        addToCart(name, gia, img, nameSrc)
    })
}

function removeItem(){
    removePos = event.target
    removePos.parentElement.remove()
    updateCart()
   }





// banner

var banner = document.getElementById('banner')
var bannerBtnLeft = document.getElementById('left--btn')
var bannerBtnRight = document.getElementById('right--btn')
var bannerImg = document.getElementById('banner__img')
var img = document.getElementsByClassName('banner-img')

function rightMove() {
    for (let i = 0; i <= img.length; i++) {
        if (img[i].hidden == false) {
            img[i].hidden = true
            if (i + 1 < img.length) {
                img[++i].hidden = false
                break
            } else {
                img[img.length - 1].hidden = true
                img[0].hidden = false
                break
            }
        }
    }
}

function leftMove() {
    for (let i = 0; i < img.length; i++) {
        if (img[i].hidden == false) {
            img[i].hidden = true
            if (i - 1 < 0) {
                img[img.length - 1].hidden = false
                break
            } else {
                img[--i].hidden = false
                break
            }
        }
    }
}


//setInterval(rightMove, 5000)


// Details

var btnMinus = document.getElementById('btn-minus')
var btnPlus = document.getElementById('btn-plus')
var amount = document.getElementById('amount')

btnMinus.addEventListener('click' ,function (){
    if (amount.innerText != 1) {
        amount.innerText--;
    } else return null
})
btnPlus.addEventListener( 'click', function (){
    amount.innerText++;
})


