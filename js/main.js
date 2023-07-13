// header menu
var headerLi = document.querySelectorAll('#header-left > ul > div > li')
var flyoutContent = document.querySelectorAll('.flyout-content')
var searchIcon = document.getElementById('search-icon')
var searchBar = document.getElementById('search-bar')
var searchClose = document.getElementById('close-button')
var x = 0
for (let i=0; i<3; i++) {
    headerLi[i].onmousemove = function() {
        flyoutContent[i].style.display = 'block'
    }
    headerLi[i].onmouseout = function() {
        if (x==0) {
            flyoutContent[i].style.display = 'none'
        }
    }
    flyoutContent[i].onmousemove = function() {
        x = 1
    }
    flyoutContent[i].onmouseout = function() {
        x = 0
    }
}
searchIcon.onclick = function() {
    searchBar.style.display = 'block'
}
searchClose.onclick = function() {
    searchBar.style.display = 'none'
}


// Slider
window.addEventListener("load", function() {
    const sliderMain = document.querySelector("#slider-main")
    const nextButton = document.querySelector(".slider-next")
    const prevButton = document.querySelector(".slider-prev")
    const dotItem = document.querySelectorAll(".slider-dot")
    let positionX = 0
    let index = 0
    const dotItemsArray = Array.from(dotItem);
    
    dotItemsArray.forEach((item) =>
        item.addEventListener("click", function(e) {
            dotItemsArray.forEach((el) => el.classList.remove("active"))
            e.target.classList.add("active")
            var width = document.documentElement.clientWidth || document.body.clientWidth;
            const slideIndex = parseInt(e.target.dataset.index)
            index = slideIndex
            positionX = -1 * index * width
            sliderMain.style = `transform: translateX(${positionX}px)`
        })
    )
    nextButton.addEventListener("click", function() {
        handleChangeSlide(1)
    })
    prevButton.addEventListener("click", function() {
        handleChangeSlide(-1)
    })
    function handleChangeSlide(direction) {
        var width = document.documentElement.clientWidth || document.body.clientWidth;
        if (direction==1) {
            if (index>=2) {
                index = 2
                return
            }
            index++
            positionX = -1 * index * width
            sliderMain.style = `transform: translateX(${positionX}px)`
        }
        else if (direction==-1) {    
            if (index<=0) {
                index = 0
                return
            }
            index--
            positionX = -1 * index * width
            sliderMain.style = `transform: translateX(${positionX}px)`
        }
        dotItemsArray.forEach((el) => el.classList.remove("active"))
        dotItem[index].classList.add("active")
    }
    window.addEventListener("resize", function() {
        var width = document.documentElement.clientWidth || document.body.clientWidth;
        positionX = -1 * index * width
        sliderMain.style = `transform: translateX(${positionX}px)`
    })
})


//Content-header
const c1hItems = document.querySelectorAll('.c1h-item')
const c1hItemsArray = Array.from(c1hItems)
c1hItemsArray.forEach((item) =>
    item.addEventListener('click', function(e) {
        c1hItemsArray.forEach((i) => i.classList.remove("bold"))
        e.target.classList.add("bold")
    })
)

