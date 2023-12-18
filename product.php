<?php

include('database.php');

if(!isset($_COOKIE['user'])){
    header('Location: /Shop/login.php');
};

$usersEmail = $_COOKIE['user'];

$id = $_GET['productid'];

    $query = mysqli_query($start, "SELECT * FROM `products` WHERE id = '$id';");
    foreach($query as $row) {
        $title = $row['title'];
        $type = $row['type'];
        $price = $row['price'];
        $material = $row['material'];
        $discription = $row['discription'];
    };

    if (isset($_POST['deleteComment'])) {
    
        $commentId = $_POST['commentId'];
        $query = mysqli_query($start, "DELETE FROM `comments` WHERE id = '$commentId';");
    }
?> 

<!DOCTYPE html>
<html>
<head>
<title> DQ MERCH</title>
    <link rel="shortcut icon" href="img/avatar.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="plugins/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body onload="cartLength();">
    <div class="blackout" onclick="closeMenu();"></div>
    <div id="menu">
        <div id="menuList">
            <a href="html/about.html"><p>about us</p></a>
            <a href="html/contacts.html"><p>contacts</p></a>
            <a href="html/faq.html"><p>faq</p></a>
            <a href="#"><p>terms & conditions</p></a>
            <div class="socialMeidaIcons"><a href="#"><svg class="facebook" width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="21.16" cy="21.16" r="19.66" stroke="black" stroke-opacity="0.9" stroke-width="3"/>
                <path d="M22.4552 16.7885V14.8025C22.4552 14.4514 22.5892 14.1146 22.8275 13.8663C23.0659 13.618 23.3892 13.4785 23.7263 13.4785H24.9973V10.1685H22.4552C21.4439 10.1685 20.474 10.5869 19.7589 11.3318C19.0438 12.0767 18.6421 13.087 18.6421 14.1405V16.7885H16.1V20.7606H18.6421V31.3527H22.4552V20.7606H24.9973L26.2684 16.7885H22.4552Z" fill="black" fill-opacity="0.8"/>
                </svg></a>              
              <a href="#"><svg class="twitter" width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="21.4758" cy="21.16" r="19.66" stroke="black" stroke-opacity="0.9" stroke-width="3"/>
                <path opacity="0.8" d="M33.8715 14.0684C33.0109 14.4449 32.1007 14.6951 31.1689 14.8113C32.1508 14.2271 32.885 13.302 33.2323 12.2112C32.3129 12.7581 31.307 13.1432 30.2581 13.3499C29.6148 12.6617 28.7802 12.1834 27.8625 11.977C26.9447 11.7706 25.9863 11.8457 25.1117 12.1925C24.2371 12.5394 23.4866 13.1419 22.9578 13.9219C22.4289 14.7019 22.1461 15.6234 22.146 16.5666C22.1423 16.9272 22.1788 17.287 22.2547 17.6394C20.3887 17.5482 18.563 17.063 16.8968 16.2156C15.2306 15.3682 13.7615 14.1777 12.5855 12.7218C11.9819 13.7567 11.7949 14.9836 12.0628 16.1521C12.3306 17.3206 13.0332 18.3424 14.0269 19.0089C13.2849 18.9908 12.5581 18.7941 11.9077 18.4353V18.4869C11.9103 19.5728 12.2851 20.6248 12.9693 21.4664C13.6536 22.308 14.6055 22.888 15.6656 23.1091C15.2643 23.2151 14.8508 23.2672 14.4358 23.264C14.1378 23.2693 13.8401 23.2424 13.5478 23.1837C13.8509 24.1173 14.4351 24.9338 15.22 25.5206C16.0049 26.1075 16.9519 26.4359 17.9306 26.4606C16.2705 27.7633 14.2229 28.4702 12.1151 28.4684C11.7397 28.4676 11.3647 28.4427 10.9926 28.3938C13.1373 29.7799 15.6365 30.5132 18.188 30.5048C19.9443 30.517 21.6855 30.1791 23.3104 29.5108C24.9354 28.8424 26.4118 27.8569 27.6539 26.6115C28.8959 25.3661 29.8788 23.8856 30.5456 22.256C31.2124 20.6264 31.5496 18.8802 31.5378 17.1188C31.5378 16.9108 31.5307 16.7101 31.5207 16.5107C32.4458 15.8467 33.2424 15.0191 33.8715 14.0684V14.0684Z" fill="black"/>
                </svg></a>
              <a href="#"><svg class="youtube" width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="21.8399" cy="21.16" r="19.66" stroke="black" stroke-opacity="0.9" stroke-width="3"/>
                <path opacity="0.8" d="M21.397 28.8105C18.6131 28.8105 15.0371 28.7688 13.5887 28.6898C12.2618 28.6011 11.5665 28.439 10.9231 27.3338C10.2797 26.2287 9.95264 24.2832 9.95264 21.1938V21.1799C9.95264 18.0462 10.2511 16.1495 10.9231 15.0291C11.5437 13.9656 12.2174 13.7618 13.5915 13.6855C15.0514 13.5912 18.7089 13.5579 21.397 13.5579C24.0851 13.5579 27.7328 13.5912 29.1955 13.6855C30.5696 13.7618 31.2449 13.9628 31.8583 15.0291C32.5318 16.1384 32.8316 18.0339 32.8316 21.1828V21.1925C32.8316 24.3428 32.5332 26.2384 31.8611 27.3366C31.2463 28.3931 30.5739 28.6011 29.1955 28.6898C27.7514 28.7675 24.1795 28.8105 21.397 28.8105ZM18.5373 17.0244V25.344L25.6865 21.1842L18.5373 17.0244Z" fill="black"/>
                </svg></a></div>
        </div>
    </div>
    <header>
        <nav>
            <ul>
                <li>
                    <div id="openMenu" onclick="showMenu();">
                        <span></span>
                        <span id="firstMenuLine"></span>
                        <span id="secondMenuLine"></span>
                    </div>
                </li>
                <li><a href="index.php"> <?php echo "<h1>$title</h1>"; ?></a></li>
                <li>
                    <a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                    <a href="cart.php"><i class="fa-solid fa-basket-shopping"></i><span id="cartLength">0</span><span id="cartCircle"></span></a>
                </li> 
            </ul>
        </nav>   
    </header>
    <main>

        <div class='productBg sqGrey'>
            <svg class='swipeLeft' width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="23.5" cy="23.5" r="22.5" stroke="white" stroke-width="2"/>
                <path d="M14 23.5L29 14.4067L29 32.5933L14 23.5Z" fill="white"/>
            </svg>

            <?php echo "<img src='img/$title.jpg'>";?>

            <svg class='swipeRight' width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="23.5" cy="23.5" r="22.5" stroke="white" stroke-width="2"/>
                <path d="M34 23.5L19 32.5933L19 14.4067L34 23.5Z" fill="white"/>
            </svg>

            <div class="imgCircles">
                <svg class='imgCircle' width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle class="outerCircle" cx="13.5" cy="13.5" r="12.5" stroke="white" stroke-width="2"/>
                    <circle cx="13.5" cy="13.5" r="8.5" fill="white"/>
                </svg>
                <svg class='imgCircle' width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle class="outerCircle" cx="13.5" cy="13.5" r="12.5" stroke="white" stroke-width="2"/>
                    <circle cx="13.5" cy="13.5" r="8.5" fill="transparent"/>
                </svg>
                <svg class='imgCircle' width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle class="outerCircle" cx="13.5" cy="13.5" r="12.5" stroke="white" stroke-width="2"/>
                    <circle cx="13.5" cy="13.5" r="8.5" fill="transparent"/>
                </svg>
                <svg class='imgCircle' width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle class="outerCircle" cx="13.5" cy="13.5" r="12.5" stroke="white" stroke-width="2"/>
                    <circle cx="13.5" cy="13.5" r="8.5" fill="transparent"/>
                </svg>
                <svg class='imgCircle' width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle class="outerCircle" cx="13.5" cy="13.5" r="12.5" stroke="white" stroke-width="2"/>
                    <circle cx="13.5" cy="13.5" r="8.5" fill="transparent"/>
                </svg>
                <svg class='imgCircle' width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle class="outerCircle" cx="13.5" cy="13.5" r="12.5" stroke="white" stroke-width="2"/>
                    <circle cx="13.5" cy="13.5" r="8.5" fill="transparent"/>
                </svg>
                <svg class='imgCircle' width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle class="outerCircle" cx="13.5" cy="13.5" r="12.5" stroke="white" stroke-width="2"/>
                    <circle cx="13.5" cy="13.5" r="8.5" fill="transparent"/>
                </svg>
            </div>
        </div>

        <div class='productDiscription'>
            
            <?php 
                echo "<p class='price'>$price USD</p>";
                echo "<p class='textDiscription'>$discription</p>";
            ?>

            <?php

                if ($type == 'T-shirt' || $type == 'Hoodie' || $type == 'Cap') {
                    echo "
                        <div class='sizeDiscription'>
                        <p>Choose a size:</p>
                        <ul>
                            <li><label>
                                    <input type='radio' class='sizeRadio' name='sizeRadio' value='(XS)' />
                                    <span class='sizeCircle'>XS</span>
                            </label></li>
                            <li><label>
                                    <input type='radio' class='sizeRadio' name='sizeRadio' value='(S)' />
                                    <span class='sizeCircle'>S</span>
                            </label></li>
                            <li><label>
                                    <input type='radio' class='sizeRadio' name='sizeRadio' value='(M)' checked />
                                    <span class='sizeCircle'>M</span>
                            </label></li>
                            <li><label>
                                    <input type='radio' class='sizeRadio' name='sizeRadio' value='(L)'/>
                                    <span class='sizeCircle'>L</span>
                            </label></li>
                            <li><label>
                                    <input type='radio' class='sizeRadio' name='sizeRadio' value='(XL)' />
                                    <span class='sizeCircle'>XL</span>
                            </label></li>
                        </ul>
                        </div>
                    ";         
                } else {
                    echo "<input type='radio' class='sizeRadio' name='sizeRadio' value='' checked/>";
                };
                                              
            ?>

            <div class="quantityDiscription">
                <p>Quantity:</p>
                <button class="quantityMinus"onclick='quantityChange(1);'>-</button>
                <span class="quantityNumber" id="quantityNumber">1</span>
                <button class="quantityPlus" id="quantityPlus" onclick='quantityChange(2);'>+</button>

                <?php 
                    echo "<button class='addToCart' onclick='swal(`Success!`, `$type \"$title\" has been added to cart`, `success`);addToCartValidation($id);cartLength();'>ADD TO CART</button>";                                      
                ?>

            </div>
        </div>

        <div class='reviews'>
            <?php 
                $totalRating = 0;
                $i = 0;
                $query = mysqli_query($start, "SELECT * FROM `comments` WHERE product = '$id'");
                foreach($query as $row) {
                    $totalRating += $row['rating'];
                    $i++;
                }
                if (mysqli_num_rows($query) > 0) {
                    $totalRating = $totalRating/$i;
                    $totalRating = round($totalRating , 1, PHP_ROUND_HALF_DOWN);
                    $totalRating = number_format($totalRating, 1);
                    echo "
                    <h2>Customer Reviews (<span>$i</span>)</h2>
                    <select name='allreviews' id='allreviews' onchange=''>
                        <option value='6'>ALL REVIEWS</option>
                        <option value='5'>★★★★★</option>
                        <option value='4'>★★★★</option>
                        <option value='3'>★★★</option>
                        <option value='2'>★★</option>
                        <option value='1'>★</option>
                    </select>
                    <h1>$totalRating</h1>
                    <div class='bigStars'>
                    ";
                    $totalRating = round($totalRating , 0, PHP_ROUND_HALF_DOWN);
                    for ($i = 0; $i < $totalRating; $i++) {
                        echo "
                        <svg width='33' height='32' viewBox='0 0 33 32' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <path d='M16.0245 1.08156C16.1741 0.620902 16.8259 0.620908 16.9755 1.08156L20.178 10.9377C20.3788 11.5557 20.9547 11.9742 21.6046 11.9742H31.9679C32.4523 11.9742 32.6537 12.594 32.2618 12.8787L23.8777 18.9701C23.352 19.3521 23.132 20.0291 23.3328 20.6472L26.5352 30.5033C26.6849 30.9639 26.1577 31.347 25.7658 31.0623L17.3817 24.9709C16.8559 24.5889 16.1441 24.5889 15.6183 24.9709L7.23419 31.0623C6.84234 31.347 6.3151 30.9639 6.46477 30.5033L9.66722 20.6472C9.86804 20.0291 9.64805 19.3521 9.12232 18.9701L0.73819 12.8787C0.346331 12.594 0.547722 11.9742 1.03208 11.9742H11.3954C12.0453 11.9742 12.6212 11.5557 12.822 10.9377L16.0245 1.08156Z' fill='white' stroke='#474444'/>
                        </svg>
                        ";
                    }
                    $totalRating = 5 - $totalRating;
                    for ($i = 0; $i < $totalRating; $i++) {
                        echo "
                            <svg width='33' height='32' viewBox='0 0 33 32' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                <path d='M16.0245 1.08156C16.1741 0.620902 16.8259 0.620908 16.9755 1.08156L20.178 10.9377C20.3788 11.5557 20.9547 11.9742 21.6046 11.9742H31.9679C32.4523 11.9742 32.6537 12.594 32.2618 12.8787L23.8777 18.9701C23.352 19.3521 23.132 20.0291 23.3328 20.6472L26.5352 30.5033C26.6849 30.9639 26.1577 31.347 25.7658 31.0623L17.3817 24.9709C16.8559 24.5889 16.1441 24.5889 15.6183 24.9709L7.23419 31.0623C6.84234 31.347 6.3151 30.9639 6.46477 30.5033L9.66722 20.6472C9.86804 20.0291 9.64805 19.3521 9.12232 18.9701L0.73819 12.8787C0.346331 12.594 0.547722 11.9742 1.03208 11.9742H11.3954C12.0453 11.9742 12.6212 11.5557 12.822 10.9377L16.0245 1.08156Z' fill='black' stroke='#474444'/>
                            </svg>
                        ";
                    }
                    echo"
                        </div>
                        <div class='commentScroll'>"
                    ;
                        $query = mysqli_query($start, "SELECT * FROM `comments` WHERE product = '$id' ORDER BY `date` DESC;");
                        foreach($query as $row) {
                            $commentText = $row['text'];
                            $commentDate = $row['date'];
                            $commentDate = substr($commentDate, 0, 10);
                            $commentRating = $row['rating'];
                            $commentatorsEmail = $row['email'];
                            $commentId = $row['id'];
                            $query = mysqli_query($start, "SELECT * FROM `users` WHERE email = '$commentatorsEmail';");
                            foreach($query as $row) {
                                $commentatorsName = $row['name'];
                            }
                            echo"
                            <div class='comment'>
                                <p class='date'>$commentDate</p>  
                                <div class='smallStars'>
                            ";
                            for ($i = 0; $i < $commentRating; $i++) {
                                echo "
                                    <svg width='18' height='17' viewBox='0 0 18 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M8.48029 0.373787C8.64387 -0.124595 9.35613 -0.124596 9.51971 0.373786L11.2697 5.70545C11.3429 5.92833 11.5527 6.07924 11.7894 6.07924H17.4525C17.9819 6.07924 18.202 6.74981 17.7737 7.05782L13.1922 10.353C13.0006 10.4907 12.9205 10.7349 12.9936 10.9578L14.7436 16.2894C14.9072 16.7878 14.331 17.2023 13.9027 16.8942L9.3212 13.5991C9.12967 13.4613 8.87033 13.4613 8.6788 13.5991L4.09727 16.8942C3.669 17.2023 3.09278 16.7878 3.25636 16.2894L5.00635 10.9578C5.07951 10.7349 4.99937 10.4907 4.80784 10.353L0.226304 7.05782C-0.201959 6.74981 0.0181382 6.07924 0.547501 6.07924H6.21059C6.44733 6.07924 6.65714 5.92833 6.7303 5.70545L8.48029 0.373787Z' fill='white'/>
                                    </svg>
                                ";
                            }
                            $commentRating = 5 - $commentRating;
                            for ($i = 0; $i < $commentRating; $i++) {
                                echo "
                                    <svg width='18' height='17' viewBox='0 0 18 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M8.48029 0.373787C8.64387 -0.124595 9.35613 -0.124596 9.51971 0.373786L11.2697 5.70545C11.3429 5.92833 11.5527 6.07924 11.7894 6.07924H17.4525C17.9819 6.07924 18.202 6.74981 17.7737 7.05782L13.1922 10.353C13.0006 10.4907 12.9205 10.7349 12.9936 10.9578L14.7436 16.2894C14.9072 16.7878 14.331 17.2023 13.9027 16.8942L9.3212 13.5991C9.12967 13.4613 8.87033 13.4613 8.6788 13.5991L4.09727 16.8942C3.669 17.2023 3.09278 16.7878 3.25636 16.2894L5.00635 10.9578C5.07951 10.7349 4.99937 10.4907 4.80784 10.353L0.226304 7.05782C-0.201959 6.74981 0.0181382 6.07924 0.547501 6.07924H6.21059C6.44733 6.07924 6.65714 5.92833 6.7303 5.70545L8.48029 0.373787Z' fill='black'/>
                                    </svg>
                                ";
                            }
                            echo"
                                </div>
                                <p class='name'>$commentatorsName</p>  
                                <p class='text'>$commentText</p>
                            ";
                            if (isset($_COOKIE['admin']) || $commentatorsEmail == $usersEmail) {
                                echo"
                                    <form method='POST'>
                                        <input type='radio' class='sizeRadio' name='commentId' value='$commentId' checked/>
                                        <input class='deleteComment' type='submit' name='deleteComment' value='DELETE'>
                                    </form>
                                ";
                            }
                            echo"
                                </div>
                            ";
                        };
                } else {
                    echo "
                    <h2>Customer Reviews (<span>$i</span>)</h2>
                    <select name='allreviews' id='allreviews' onchange=''>
                        <option value='6'>ALL REVIEWS</option>
                        <option value='5'>★★★★★</option>
                        <option value='4'>★★★★</option>
                        <option value='3'>★★★</option>
                        <option value='2'>★★</option>
                        <option value='1'>★</option>
                    </select>
                    <h1>-</h1>
                    <div class='bigStars'>
                    ";
                    $totalRating = 5 - $totalRating;
                    for ($i = 0; $i < $totalRating; $i++) {
                        echo "
                            <svg width='33' height='32' viewBox='0 0 33 32' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                <path d='M16.0245 1.08156C16.1741 0.620902 16.8259 0.620908 16.9755 1.08156L20.178 10.9377C20.3788 11.5557 20.9547 11.9742 21.6046 11.9742H31.9679C32.4523 11.9742 32.6537 12.594 32.2618 12.8787L23.8777 18.9701C23.352 19.3521 23.132 20.0291 23.3328 20.6472L26.5352 30.5033C26.6849 30.9639 26.1577 31.347 25.7658 31.0623L17.3817 24.9709C16.8559 24.5889 16.1441 24.5889 15.6183 24.9709L7.23419 31.0623C6.84234 31.347 6.3151 30.9639 6.46477 30.5033L9.66722 20.6472C9.86804 20.0291 9.64805 19.3521 9.12232 18.9701L0.73819 12.8787C0.346331 12.594 0.547722 11.9742 1.03208 11.9742H11.3954C12.0453 11.9742 12.6212 11.5557 12.822 10.9377L16.0245 1.08156Z' fill='black' stroke='#474444'/>
                            </svg>
                        ";
                    }
                    echo"
                        </div>
                        <div class='commentScroll'>";
                            echo"
                            <div class='comment'>
                                <p class='date'> </p>  
                                <div class='smallStars'>
                            ";

                            echo"
                                </div>
                                <p class='name'> </p>  
                                <p class='text'>No one has commented on this product yet. Order it and be the first!</p>  
                            </div>
                            ";
                }
                ?>
            </div>
            
            <div class="pages">
                <span>&lt;</span>
                <span>1</span>
                <span>&gt;</span>
            </div>
        </div>


                
        <div class='bestsellersTopic'>RECOMMENDED FOR <span>PURCHASE</span></div>
        <div class='bestsellers'>
        <?php
        $generalSaturs = '';
        $query = mysqli_query($start, "SELECT * FROM orders");
        foreach($query as $row) {
            $saturs = $row['saturs'];
            $generalSaturs = $generalSaturs . $saturs;
        };

        $allProducts = array();
        $generalSaturs = explode(";", $generalSaturs);
        array_pop($generalSaturs);
        foreach ($generalSaturs as $product) {

            $product = explode(",", $product);
            $productTitleSaturs = $product[0];
            $productQtt = $product[2];
            $i = 1;
            $query = mysqli_query($start, "SELECT * FROM products");
            foreach($query as $row) {
                $productTitleDB = $row['title'];
                if ($productTitleDB == $productTitleSaturs){
                    if(!isset($allProducts[$i])){
                        $allProducts[$i] = 0;
                    }
                    $allProducts[$i] += (int)$productQtt;
                }
                $i++;
            };
        };
        for ($a = 0; $a < 5; $a++){
            arsort($allProducts);
            $firstProduct = array_key_first($allProducts);
            $query = mysqli_query($start, "SELECT * FROM `products` WHERE id = '$firstProduct';");
            foreach($query as $row) {
                $title = $row['title'];
                $price = $row['price'];
                echo "
                    <div class='bestProduct'>
                        <img src='img/$title.jpg'><div class='productHoverEffect' onclick='window.location = `product.php?productid=$firstProduct`;'></div>
                        <div class='bestProductPrice'>$price USD</div>
                        <div class='productName'>$title</div>
                    </div>
                ";
            };
            $allProducts[$firstProduct] = 0;
        };
        ?>
        </div>
                
    </main>
    <footer>
        <div id="dividingLine"></div>
    </footer>
</body>
<script src="plugins/jquery-3.6.4.min.js"></script>
<script src="plugins/sweetalert.min.js"></script>
<script src="js/main.js"></script>
<script src="js/product.js"></script>
</html>
