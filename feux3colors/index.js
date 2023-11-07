let img = document.querySelector('img')

function changeColor(){

    if(img.getAttribute("src") == "feux-feurouge.jpg"){
        img.setAttribute("src", "feux-feuorange.jpg")
    }
    else if(img.getAttribute("src") == "feux-feuorange.jpg"){
        img.setAttribute("src", "feux-feuvert.jpg")
    }
    else if(img.getAttribute("src") == "feux-feuvert.jpg"){
        img.setAttribute("src", "feux-feurouge.jpg")
    }

}

setInterval(changeColor, 5000)














