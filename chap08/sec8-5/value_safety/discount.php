<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>金額の計算</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div>
    <?php
    require_once("../lib/util.php");
    if (!cken($_POST)) {
      $encoding = mb_internal_encoding();
      $err = "Encoding Error! The expected encoding is " . $encoding;
      exit($err);
    }
    $_POST = es($_POST);
    ?>

    <?php
    $errors = [];
    if (isset($_POST['couponCode'])) {
      $couponCode = $_POST['couponCode'];
    } else {
      $couponCode = '';
    }
    if (isset($_POST['goodsID'])) {
      $goodsID = $_POST['goodsID'];
    } else {
      $goodsID = '';
    }
    ?>

    <?php
    require_once('saledata.php');
    $discount = getCouponRate($couponCode);
    $tanka = getPrice(($goodsID));
    if (is_null($discount) || is_null($tanka)) {
      $err = '<div class="error"> 不正な操作がありました</div>';
      exit($err);
    }
    ?>

    <?php
    if (isset($_POST['kosu'])) {
      $kosu = $_POST['kosu'];
      if (!ctype_digit($kosu)) {
        $errors[] = "戸数はせいの整数で入力してください";
      }
    } else {
      $errors[] = "個数が未設定";
    }
    ?>

    <?php

    if (count($errors) > 0) {
      echo '<ol class = "error">';
      foreach ($errors as $value) {
        echo '<li>', $value, "<li>";
      }
      echo "<ol>";
    } else {
      $price = $tanka * $kosu;
      $discount_price = floor($price * $discount);
      $off_price = $price - $discount_price;
      $off_per = (1 - $discount) * 100;
      $tanka_fmt = number_format($tanka);
      $discount_price_fmt = number_format($tanka);
      $off_price_fmt = number_format($off_price);

      echo h("単価：{$tanka_fmt}円", "個数：{$kosu}個"), "<br>";
      echo h("個数：{$kosu}個"), "<br>";
      echo h("金額：{$discount_price_fmt}円"), "<br>";
      echo h("(割引：-{$off_price_fmt}円、{$off_per}%OFF)"), "<br>";
    }
    ?>
    <form action="discountForm.php" method="POST">
      <input type="hidden" name="kosu" value="<?php echo h($kosu) ?>">
      <input type="submit" value="戻る">
    </form>