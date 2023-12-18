// Позволяет пользователю в меню подробной информации добавить в корзину тот же товар в определенном количестве (1-99)

function quantityChange(value){
    if(value == 1){
        let quantityNumber = document.getElementById("quantityNumber").innerText;
        if (quantityNumber > 1){
            quantityNumber--;
            document.getElementById("quantityNumber").innerText = quantityNumber;
        }
    } else if (value == 2) {
        let quantityNumber = document.getElementById("quantityNumber").innerText;
        if (quantityNumber < 99){
            quantityNumber++;
            document.getElementById("quantityNumber").innerText = quantityNumber;
        }
    }
}

// Следующие 2 функции Позволяют добавлять продукты в корзину

function addToCart(size, id, quantityNumber){
    console.log('add' +id);
    $.ajax({
        method: "POST",
        url: "/Shop/cartBack.php",
        dataType:"text",
        data: 'action=add&id='+id+'&size='+size+'&quantity='+quantityNumber,
        error: function(){
            alert('gg no chance');
        }
    });
}

function addToCartValidation(id){
    var size = document.querySelector('input[name="sizeRadio"]:checked').value;
    let quantityNumber = document.getElementById("quantityNumber").innerText;
    addToCart(size, id, quantityNumber);
}

// черовик, нигде не используиется

function whatReviews(){
    let reviewsValue = document.getElementById("allreviews").value;
    console.log(reviewsValue );
    $.ajax({
        type: "POST",
        data: 'reviewsValue='+reviewsValue,
        error: function(){
            alert('gg no chance');
        },
        success: function (response){
        
        }
    });
}

