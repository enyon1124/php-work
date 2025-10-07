<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <?php
  $x = 100;
  if ($x >10) {
    $x = 20;
    echo 'a', $x, '<br>';
  }
  echo 'b', $x;
  ?>
  
  <script>
    'use strict'

    let x = 100;
    if (x > 10) {
      let x = 20;
      console.log('a', x);
    }
    console.log('b', x);
  </script>
</body>

</html>