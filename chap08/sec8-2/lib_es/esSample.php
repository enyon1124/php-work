<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../scc/style.css">
</head>

<body>
  <div>
    <pre>
      <?php

      require_once("lib/util.php");
      $myCode = "<h1>テスト１</h1>";
      $myArray = [
        'a' => '<p>赤</p>',
        'b' => "<script>alert('hello')</script>",
      ];
      echo '$myCodeの値：', ($myCode);
      echo PHP_EOL . PHP_EOL;
      echo '$myArrayの値：';
      foreach ($myArray as $k => $v) {
        echo "<p>";
        echo ($v);
        echo "</p>";
      }
      ?>
    </pre>
  </div>
</body>

</html>