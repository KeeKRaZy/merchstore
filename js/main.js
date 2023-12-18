// Следующие 2 функции организуют открытие и закрытие менюшки

var firstLine = document.getElementById("firstMenuLine");
var secondLine = document.getElementById("secondMenuLine");

var menuContainer = document.getElementById("menu");
var menuBlackout = document.querySelector('.blackout');

function showMenu(){
    if(menuBlackout.classList.length > 1){
        closeMenu();
        return;
    }
    firstLine.style.marginTop = "0px";
    firstLine.style.transform = "rotate(-45deg)";
    firstLine.style.backgroundColor = "black";
    firstLine.style.height = "4px";
    
    secondLine.style.marginTop = "0px";
    secondLine.style.transform = "rotate(45deg)";
    secondLine.style.backgroundColor = "black"
    secondLine.style.height = "4px"
    
    menuContainer.style.right = "84.3vw";
    firstLine.style.position = "fixed";
    secondLine.style.position = "fixed";
    menuBlackout.classList.add('is-visible');
    
}

function closeMenu(){
    firstLine.style.marginTop = "-10px";
    firstLine.style.transform = "rotate(0deg)";
    firstLine.style.backgroundColor = "rgb(238, 238, 238)"
    firstLine.style.height = "6px"

    secondLine.style.marginTop = "10px";
    secondLine.style.transform = "rotate(0deg)";
    secondLine.style.backgroundColor = "rgb(238, 238, 238)"
    secondLine.style.height = "6px"

    menuContainer.style.right = "100%";
    firstLine.style.position = "absolute";
    secondLine.style.position = "absolute";
    menuBlackout.classList.remove('is-visible');
}


// Измеряет количество продуктов в корзине на данный момент

function cartLength(){
    console.log('length');
    $.ajax({
        method: "POST",
        url: "/Shop/cartBack.php",
        dataType:"text",
        data: 'action=cartLength',
        error: function(){
            alert('gg no chance');
        },
        success: function (response){
            $('#cartLength').html(response);
        }
    });
}

// Закрашивает звезды при оставлении отзыва

function fillStars(index) {
    const stars = document.querySelectorAll('.star');
      
    for (let i = 0; i < index; i++) {
        stars[i].classList.add('filled');
    }

    for (let i = index; i < stars.length; i++) {
        stars[i].classList.remove('filled');
    }
}

// Следующие 2 функции открывают и закрывают меню для оставления комментария

let commentPopup = document.querySelector('.commentPopup');
let productReview = document.querySelector('.productReview');
document.querySelector('.coding');

function openPopup(productid){
    commentPopup.classList.add('is-visible');
    productReview.style.height = "500px";
    productReview.style.width = "700px";
    document.querySelector('.coding').value = productid;
    document.querySelector('.coding').checked = true;

}

function closePopup(){
    commentPopup.classList.remove('is-visible');
    setTimeout(function(){    productReview.style.height = "450px";
    productReview.style.width = "650px";},300);

}

// Проверяет оценил ли пользователь товар (в звездах) перед загрузкой комментария в дб

function commentValidation(){

    let radioButtons = document.getElementsByName("starRating");

    for (let i = 0; i < radioButtons.length; i++) {
      if (radioButtons[i].checked) {
        return;
      }
    }
    document.querySelector('.errorComment').innerHTML = 'YOU HAVE TO RATE THE PRODUCT';
}