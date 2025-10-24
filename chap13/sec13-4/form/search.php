<?php
require_once('../lib/util.php');
$gobackURL = "searchForm.html";
// $_POST['name'] = '木';

if (!cken($_POST)) {
  header("Location:{$gobackURL}");
  exit();
}

if (empty($_POST)) {
  header("Location:{$gobackURL}");
  exit();
} else if (!isset($_POST['name']) || $_POST['name'] === '') {
  header("Location:{$gobackURL}");
  exit();
}

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
    $name = $_POST['name'];
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "データベース{$dbName}に接続しました";

      $sql = "SELECT * FROM member WHERE name LIKE :name";
      $stm = $pdo->prepare($sql);
      $stm->bindValue(':name', "%{$name}%", PDO::PARAM_STR);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      if (count($result) > 0) {
        echo "名前に「", h($name), "」が含まれているレコード";
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
      } else {
        echo "名前に「", h($name), "」は見つかりませんでした。";
      }
    } catch (Exception $e) {
      echo '<span class="error">エラーがありました</span><br>';
      echo $e->getMessage();
      exit();
    }
    ?>
    <hr>
    <a href="<?php echo $gobackURL ?>">もどる</a>
  </div>
</body>

</html>