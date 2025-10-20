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
    if (!cken($_POST)){
      $encoding = mb_internal_encoding();
      $err = "Encoding Error! The expected encoding is " . $encoding ;
      exit($err);
    }
    $_POST =es($_POST);
    ?>

    <?php
    $errors = [];
    if(isset($_POST['discount'])) {
      $discount = $_POST['discount'];
      if(!is_numeric($discount)) {
        $errors[] = "割引率の数値エラー";
      }
    } else {
      $errors[] = "割り義気率が未定";
    }
    if(isset($_POST['tanka'])) {
      $tanka = $_POST['tanka'];
      if(!ctype_digit($tanka)) {
        $errors[] = "単価の数値エラー";
      }
    } else {
      $errors[] = "単価が未設定";
    }

  ?>
  </div>
</body>
</html>