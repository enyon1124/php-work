<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../scc/style.css">
</head>

<body>
  <div>
    <?php
    $data = $_GET["data"];
    echo "「{$data}」を受け取りました。";
    ?>
    <p><a href="getRequest.php">もどる</a></p>
    <hr>
    <p>このURLでアクセスされました。</p>
    <span id="url"></span>
  </div>
  <script>
    'use strict';
    document.getElementById('url').textContent = location.href;
  </script>
</body>

</html>