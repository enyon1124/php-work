<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>URLエンコード(GET)</title>
  <link rel="stylesheet" href="../scc/style.css">
</head>

<body>
  <div>
    <?php
    $data = "東京 大阪";
    $data = urlencode($data);
    $url = "check データ.php";
    $url = rawurldecode($url);
    echo "<a href=\"{$url}?data={$data}\">送信する</a>";
    ?>
    <hr>
    <p>このURLで送信します。<br>
      <?php
      echo "{$url}?data={$data}";
      ?>
    </p>
  </div>
</body>

</html>