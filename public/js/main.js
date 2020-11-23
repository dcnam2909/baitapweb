// CART
var removeCartBtn = document.getElementsByClassName('cart-item__delete')
var itemInCart = document.getElementsByClassName('cart-item__details')
var btnBuyNow = document.getElementsByClassName('item__buy')
var namehh = document.getElementsByClassName('item__info--name')
var pricehh = document.getElementsByClassName('item__info--price')
var imghh = document.getElementsByClassName('item__img')
var totalText = document.getElementById('total')
var priceInCart = document.getElementsByClassName('cart-item__info--price')

//update cart
function updateCart() {
    total =0
    for (let i = 0; i < itemInCart.length; i++) {
        a = parseInt(priceInCart[i].innerText.replace(',',''))
        total += a
    }
    totalText.innerText = total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}

// remove cart
for (let i = 0; i < removeCartBtn.length; i++){
    var unCart = removeCartBtn[i]
    unCart.addEventListener('click', function(){
        itemInCart[i].remove()
        updateCart()
    })
}

// buy button
for (let i = 0; i < btnBuyNow.length; i++){
    var buy = btnBuyNow[i]
    buy.addEventListener('click', function(){
        
    })
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


setInterval(rightMove, 5000)


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


