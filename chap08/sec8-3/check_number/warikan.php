<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>割り勘計算</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div>
    <?php
    require_once('../lib/util.php');
    if (!cken($_POST)) {
      exit("Encoding Error! Not UTF-8");
    }
    ?>

    <?php
    $errors = [];
    ?>

    <?php
    if (isset($_POST['goukei'])) {
      $goukei = $_POST['goukei'];
      // 整数でない場合はfalse
      if (!ctype_digit($goukei)) {
        $errors[] = "合計金額を整数で入力してください";
      }
    } else {
      $errors[] = "割り勘フォームからアクセスしてください";
    }
    ?>

    <?php
    if (isset($_POST['ninzu'])) {
      $ninzu = $_POST['ninzu'];
      if (!ctype_digit($ninzu)) {
        $errors[] = "人数を整数で入力してください";
      } else if ($ninzu == 0) {
        $errors[] = "0では割れません";
      }
    } else {
      $errors[] = "フォームからアクセスしてください";
    }
    ?>

    <?php
    if (count($errors) > 0) {
      echo '<ol class="error">';
      foreach ($errors as $value) {
        echo "<li>", $value, "</li>";
      }
      echo "</ol>";
    ?>
      <form action="warikanForm.php" method="POST">
        <ul>
          <li><input type="submit" value="もどる"></li>
        </ul>
      </form>
    <?php
    } else {
      $amari = $goukei % $ninzu;
      $price = ($goukei - $amari) / $ninzu;
      $goukei_fmt = number_format($goukei);
      $price_fmt = number_format($price);
      echo h("{$goukei_fmt}円を{$ninzu}で割り勘します。"), "<br>";
      echo h("一人当たり{$price_fmt}円支払えば、");
      echo h("不足分は{$amari}円です。"), "<br>";
    }
    ?>
  </div>

</body>

</html>