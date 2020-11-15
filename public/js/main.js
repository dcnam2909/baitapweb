const banner = document.getElementById('banner')
const bannerBtnLeft = document.getElementById('left--btn')
const bannerBtnRight = document.getElementById('right--btn')
const bannerImg = document.getElementById('banner__img')
const img = document.getElementsByClassName('banner-img')
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
