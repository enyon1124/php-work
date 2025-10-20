<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>フォーム入力の値で計算する</title>
  <link rel="stylesheet" href="../scc/style.css">
</head>

<body>
  <div>
    <?php
    $tanka = $_POST["tanka"];
    $kosu = $_POST["kosu"];

    $price = $tanka * $kosu;

    $tanka = number_format($tanka);
    $price = number_format($price);

    echo "単価{$tanka}円 × {$kosu}個は{$price}円です。";

    ?>
    <p><a href="calcForm.php"></a></p>
    
  </div>
</body>

</html>