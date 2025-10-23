<?php
require_once('../lib/util.php');
$user = "testuser";
$password = "testuser";
$dbName = "testdb";
$host = "localhost:3306";
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div>
    <?php
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "データベース{$dbName}に接続しました";

      $sql = <<< EOD
            UPDATE member SET name = '新倉辰雄'
            WHERE id = 5
            EOD;
      $stm = $pdo->prepare($sql);
      $stm->execute();

      $sql = "SELECT * FROM member WHERE id = 5";
      $stm = $pdo->prepare($sql);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    ?>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>名前</th>
            <th>年齢</th>
            <th>性別</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($result as $row) {
            echo "<tr>";
            echo "<td>", h($row['id']), "</td>";
            echo "<td>", h($row['name']), "</td>";
            echo "<td>", h($row['age']), "</td>";
            echo "<td>", h($row['sex']), "</td>";
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