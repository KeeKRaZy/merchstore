<?php
session_start();

include('database.php');
$action = $_POST["action"];

if ($action =='show'){
    if (!isset($_SESSION['cart'])){
        echo'Your session is currently empty.';
        exit;
    }
    $cart = $_SESSION['cart'];
    if (count($_SESSION['cart']) == 0){
        echo'Your cart is currently empty.';
        exit;
    }

    ob_start();
    echo "<div id='shoppingCart'>
          <div class='columnHeader'>
            <li class='productTitle'>Product</li>
            <li>
                <li class='productPrice'>Type</li>
                <span class='productQtt'>Qty</span>
                <span class='productType'>Price</span>
            </li>
          </div>";

              $subtotal = 0;
              $orderSaturs = '';
              foreach($cart as $product) {
                $query = mysqli_query($start, "SELECT * FROM `products` WHERE id = '$product[0]';");
                foreach($query as $row) {
                    $title = $row['title'];
                    $type = $row['type'];
                    $price = $row['price']*$product[1];
                    $size = $product[2];
                    $subtotal += $price;
                        echo "<div class='columnName'>
                                <li class='productTitle'>
                                    <img src='img/$title.jpg'>
                                    <span>$title <span class='sizeStyle'>$size</span></span>
                                </li>
                                <li>
                                    <li class='productPrice'>$type</li>
                                    <span class='productQtt'>⠀$product[1]</span>
                                    <span class='productType'>\$$price</span>
                                </li>
                                <div class='removeProduct' onclick='deleteFromCart($product[0], `$product[2]`);'>
                                    <span></span>
                                    <span class='firstRemoveLine'></span>
                                    <span class='secondRemoveLine'></span>
                                </div>
                                <div class='moreProduct' onclick='moreQty($product[0], `$product[2]`);'>
                                    <span></span>
                                    <span class='firstmoreLine'></span>
                                    <span class='secondmoreLine'></span>
                                </div>
                                <div class='lessProduct' onclick='lessQty($product[0], `$product[2]`);'>
                                    <span></span>
                                    <span class='firstlessLine'></span>
                                    <span class='secondlessLine'></span>
                                </div>
                            </div>";
                           
                            $orderSaturs = $orderSaturs . $title . ',' . $size . ',' . $product[1] . ';';
                }};
                
    if(isset($_COOKIE['orderPrice'])){
        setcookie('orderPrice', $subtotal, time() - 3600, "/");
        setcookie('orderPrice', $subtotal, time() + 3600, "/");
    } else{
        setcookie('orderPrice', $subtotal, time() + 3600, "/");
    };
    
    if(isset($_COOKIE['orderSaturs'])){
        setcookie('orderSaturs', $orderSaturs, time() - 3600, "/");
        setcookie('orderSaturs', $orderSaturs, time() + 3600, "/");
    } else{
        setcookie('orderSaturs', $orderSaturs, time() + 3600, "/");
    };
    
    ob_end_flush();

    echo "</div>
            <div class='subtotal'>
            <p>Subtotal: \$$subtotal</p><br>
            <a href='checkout.php'>Checkout</a>
            <div id='dividingLine'></div>
         </div>";};

################################################

if ($action =='add'){
    if (!isset($newProduct)){
        $newProduct = array();
        $newProduct[0] = 0;
        $newProduct[1] = 1;
        $newProduct[2] = 'L';
    }

    $cart = $_SESSION['cart'];

    $id = $_POST['id'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];

    $newProduct[0] = $id;
    $newProduct[1] = $quantity;
    $newProduct[2] = $size;

    for ($i = 0; $i < count($cart); $i++){
        if ($id == $cart[$i][0] && $size == $cart[$i][2]){
            $cart[$i][1] += $quantity;
            $_SESSION['cart'] = $cart;
            exit;
        }
    }
    $cart[count($cart)] = $newProduct;
    $_SESSION['cart'] = $cart;
}

################################################

if ($action =='del'){
    $cart = $_SESSION['cart'];
    $id = $_POST['id'];
    $size = $_POST['size'];
    $newCart = array();
    $n = 0;
    for ($i = 0; $i < count($cart); $i++){
        if($cart[$i][0] != $id){
            $newCart[$n] = array();
            $newCart[$n][0] = $cart[$i][0];
            $newCart[$n][1] = $cart[$i][1];
            $newCart[$n][2] = $cart[$i][2];
            $n++;
        } else {
            if($cart[$i][2] != $size){
                $newCart[$n] = array();
                $newCart[$n][0] = $cart[$i][0];
                $newCart[$n][1] = $cart[$i][1];
                $newCart[$n][2] = $cart[$i][2];
                $n++;
            }
        }
    } 
    $_SESSION['cart'] = $newCart;
}

################################################     INSERT INTO `comments` (`text`, `email`, `product`) VALUES ('Vse круто кассно коашдл дашидиа dwaaaaaaaaaaa aaaaaaaaaaaaaa aaaaaaaaaaaad dawd adw awd asd wad aaa w awd asd wad aa w awd asd wad aaw awd asd wad aaaaaaaaaaaaa dwad a awd awd asd awdawd a aaaaaad dawd adw awd asd wad aaaa aaaaaad dawd adw awd asd wad aaaa aaaaaad dawd adw awd asd wad aaaa', 'palcevskis43@gmail.com', 'The Gentle Blade');

if ($action =='cartLength'){
    $cart = $_SESSION['cart'];
    $cartLength = 0;
    for ($i = 0; $i < count($cart); $i++){
        $cartLength+=$cart[$i][1];
    } 
    echo "$cartLength";
}

################################################

if ($action == 'more'){
    $cart = $_SESSION['cart'];
    $id = $_POST['id'];
    $size = $_POST['size'];
    for ($i = 0; $i < count($cart); $i++){
        if($cart[$i][0] == $id && $cart[$i][2] == $size){
            $cart[$i][1] += 1;
        }
    } 
    $_SESSION['cart'] = $cart;
}


################################################

if ($action == 'less'){
    $cart = $_SESSION['cart'];
    $id = $_POST['id'];
    $size = $_POST['size'];
    for ($i = 0; $i < count($cart); $i++){
        if($cart[$i][0] == $id && $cart[$i][2] == $size){
            $cart[$i][1] -= 1;
            $_SESSION['cart'] = $cart;
            if($cart[$i][1] < 1){
                $delid = $cart[$i][0];
                $delsize = $cart[$i][2];
                echo "$delid,$delsize";
            }
            exit;
        }
    } 
    
}

