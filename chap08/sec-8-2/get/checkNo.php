<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>リクエスト処理</title>
  <link rel="stylesheet" href="../scc/style.css">
</head>

<body>
  <div>
    <?php
    $no = $_GET["no"];
    $no = htmlspecialchars($no, ENT_QUOTES, 'UTF-8');
    $nolist = [3, 5, 7, 8, 9];
    if (in_array($no, $nolist)) {
      echo "{$no}はありました。";
    } else {
      echo "{$no}は見つかりません。";
    }
    ?>
    <p><a href="checkNoForm.php">もどる</a></p>
    <hr>
    <p>次のURLでアクセスされました。<br>
      <span id="url"></span>
    </p>
  </div>
  <script>
    'use strict';

    document.getElementById("url").textContent = location.href;
  </script>
</body>

</html>