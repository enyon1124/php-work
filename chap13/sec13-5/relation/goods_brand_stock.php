<?php
require_once('../lib/util.php');
$user = "inventoryuser";
$password = "inventoryuser";
$dbName = "inventory";
$host = "localhost:3306";
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
$sql = <<< EOD
  SELECT
    g.id AS goods_id,
    g.name AS goods_name,
    g.size,
    b.name AS brand_name,
    s.quantity
  FROM goods g
    INNER JOIN brand b
    ON g.brand = b.id
      LEFT OUTER JOIN stock s
      ON g.id = s.goods_id
  ORDER BY g.id
  EOD;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/tablestyle.css">
</head>

<body>
  <div>
    <?php
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stm = $pdo->prepare($sql);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    ?>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>商品</th>
            <th>サイズ</th>
            <th>ブランド</th>
            <th>在庫</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($result as $row) {
            echo "<tr>";
            echo "<td>", h($row['goods_id']), "</td>";
            echo "<td>", h($row['goods_name']), "</td>";
            echo "<td>", h($row['size']), "</td>";
            echo "<td>", h($row['brand_name']), "</td>";
            echo "<td>", h($row['quantity']), "</td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    <?php
    } catch (Exception $e) {
      echo '<span class="error">エラーがありました</span><br>';
      echo $e->getMessage();
      exit();
    }
    ?>
  </div>
</body>

</html>