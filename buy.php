<?php

if(empty($_POST['product1'] )) {
    header('Location: /errnotnull.html');
}
elseif(empty($_POST['num'] )) {
    header('Location: /errnotnull.html');
}
elseif(empty($_POST['product2'] )) {
    //вывести ошибку
}
elseif(empty($_POST['adres'] )) {
    header('Location: /errnotnull.html');
}
elseif(empty($_POST['numcard'] )) {
    header('Location: /errnotnull.html');
}
elseif(empty($_POST['code'] )) {
    header('Location: /errnotnull.html');
}
elseif(6666000000000000>($_POST['numcard'])){
    header('Location: /errnotcorrect.html');
}
elseif(6666999999999999<($_POST['numcard'])){
    header('Location: /errnotcorrect.html');
}
elseif(1000>($_POST['code'])){
    header('Location: /errnotcorrect.html');
}
elseif(9999<($_POST['code'])){
    header('Location: /errnotcorrect.html');
}
else {
    $rcode = $_POST['code'];
    $product1 = $_POST['product1'];
    $num = $_POST['num'];
    $product2 = $_POST['product2'];
    $adres = $_POST['adres'];
    $numcard = $_POST['numcard'];
    $code = '****';
    $price1 = 0;
    $price2 = 0;
    $producta = 'яички';
    $productb = 'not';

    if ($product1 == 1) {
        $price1 = 1000;
        $producta = 'яички';
    }
    elseif ($product1 == 2) {
        $price1 = 1000;
        $producta = 'конина';
    }
    elseif ($product1 == 3) {
        $price1 = 500;
        $producta = 'туш.гов';
    }
    elseif ($product1 == 4) {
        $price1 = 500;
        $producta = 'колбаса. копч';
    }
    elseif ($product1 == 5) {
        $price1 = 5000;
        $producta = 'колбаса. ферм.';
    }
    elseif ($product1 == 6) {
        $price1 = 500;
        $producta = 'туш. свин.';
    }
    elseif ($product1 == 7) {
        $price1 = 10000;
        $producta = 'мясо дино.';
    }
    elseif ($product1 == 8) {
        $price1 = 1000;
        $producta = 'крыса. жар.';
    }
    elseif ($product1 == 9) {
        $price1 = 10000;
        $producta = 'свин. жар.';
    }
    else  {

    }

    if ($product2 == 1) {
        $price2 = 0;
        $productb = 'нет';
    }
    elseif ($product2 == 2) {
        $price2 = 1000;
        $productb = 'яички';
    }
    elseif ($product2 == 3) {
        $price2 = 1000;
        $productb = 'конина';
    }
    elseif ($product2 == 4) {
        $price2 = 500;
        $productb = 'туш.гов';
    }
    elseif ($product2 == 5) {
        $price2 = 500;
        $productb = 'колбаса. копч';
    }
    elseif ($product2 == 6) {
        $price2 = 5000;
        $productb = 'колбаса. ферм.';
    }
    elseif ($product2 == 7) {
        $price2 = 500;
        $productb = 'туш. свин.';
    }
    elseif ($product2 == 8) {
        $price2 = 10000;
        $productb = 'мясо дино.';
    }
    elseif ($product2 == 9) {
        $price2 = 1000;
        $productb = 'крыса. жар.';
    }
    elseif ($product2 == 10) {
        $price2 = 10000;
        $productb = 'свин. жар.';
    }
    else  {

    }
    $d1 = $price1 * $num;
    $fullprice = $d1 + $price2;

    $text2 = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>чек об оплате</title>
</head>
<body>
<h1>чек об оплате № ';
    $text3 = '</h1>
<hr>
<table>
    <th>товар</th>
    <th>цена</th>
    <th>количество</th>
    <tr>
        <td>';
    $text4 = '</td>
        <td>';
$text5 = '</td>
    </tr>
    <tr>
        <td>';
$text6 = '</td>
    </tr>
</table>
ИТОГ: ';
$text7 = '<br>
-----------------------------
<br>
АДРЕС: ';
$text8 = '<br>
№ карты: ';
$text9 = '<br>
ДАТА ПОКУПКИ: ';
$text10 = '
<br>
*****************************
<br>
Мясокомбинат "CNM"
<br>
*****************************
<br>
Спасибо за покупку!
<br>
<li><a class="menu__item" href="./mag.html">В магазин</a></li>

</body>
</html>';
$text10v2 = '
<br>
*****************************
<br>
Мясокомбинат "CNM"
<br>
*****************************
<br>
Спасибо за покупку!
<br>
</html>';
    $dta = date(DATE_ATOM);
    $chid = mt_rand();
    $t7 = '<br>Спасибо за покупку! <br> Берегите себя, от себя...';
    $fp = fopen("cheques/$chid.html", "w");
    fwrite($fp, $text2.$chid.$text3.$producta.$text4.$price1.$text4.$num.$text5.$productb.$text4.$price2.$text4.$text6.$fullprice.$text7.$adres.$text8.$numcard.$text9.$dta.$text10v2);
    fclose($fp);
    $fp = fopen("accept.html", "w");
    fwrite($fp, $text2.$chid.$text3.$producta.$text4.$price1.$text4.$num.$text5.$productb.$text4.$price2.$text4.$text6.$fullprice.$text7.$adres.$text8.$numcard.$text9.$dta.$text10);
    fclose($fp);
    header('Location: accept.html');
}

