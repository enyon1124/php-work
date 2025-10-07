<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php
  $age = 25;
  ?>

  <?php if ($age<=15): ?>
    15歳以下の料金は500円です。<br>
  <?php elseif ($age<=19): ?>
   16歳から19歳の料金は2,000円です。<br>
  <?php else: ?>
   20歳以上の大人は2,500円です。<br>
  <?php endif; ?>


</body>
</html>