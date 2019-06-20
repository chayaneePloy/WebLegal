let ScrollBehaviour = 'smooth';
let AddPixels = document.body.offsetHeight * 0.0237868696479543;

function GetElementById(id){
    return document.getElementById(id);
}

function GetElementByTag(tag){
    return document.getElementsByTagName(tag);
}

function GetOffsetTop(element){
    return element.offsetTop;
}

function ScrollToPosition(element) {
    window.scrollTo({ top: (element - AddPixels), behavior: ScrollBehaviour });
}

function ScrollTo(id){
    let element = GetElementById(id);
    let offset = GetOffsetTop(element);
    ScrollToPosition(offset)
    return false;
}

function ChangeColor(element,color){
    element.style.backgroundColor = color;
}

function AlterMenu(scrollPosition){
    let sliderHeight = GetElementById('slider').clientHeight - 200;
    let navigation = GetElementByTag('header')[0];
    if(scrollPosition > sliderHeight){
        ChangeColor(navigation,"rgba(0,0,0,.8")
    }
    else{
        ChangeColor(navigation,"transparent")
    }
}

window.addEventListener("scroll", function() {
    let element = document.documentElement,
        scrollPosition = (window.pageYOffset || element.scrollTop) - (element.clientTop || 0);
    (window.innerWidth > 736 || window.innerHeight < window.innerWidth) && AlterMenu(scrollPosition)
})

