<?php
require_once('../lib/util.php');
$gobackURL = "insertForm.html";
// $_POST['name'] = '木';

if (!cken($_POST)) {
  header("Location:{$gobackURL}");
  exit();
}

$errors = [];
if (!isset($_POST['name']) || $_POST['name'] === '') {
  $errors[] = "名前が空です";
}
if (!isset($_POST['age']) || $_POST['age'] === '') {
  $errors[] = "年齢が空です";
}
if (!isset($_POST['sex']) || !in_array($_POST['sex'], ['男', '女'])) {
  $errors[] = "性別が男・女ではありません";
}

if (count($errors) > 0) {
  echo '<ol style="color:red">';
  foreach($errors as $error) {
    echo "<li>{$error}</li>";
  }
  echo '</ol>';
  echo '<hr>';
  echo '<a href="', $gobackURL, '">戻る</a>';
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
  <link rel="stylesheet" href="../css/tablestyle.css">
</head>

<body>
  <div>
    <?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "データベース{$dbName}に接続しました";

      $sql = <<< EOD
          INSERT INTO member
            (name, age, sex)
          VALUES
            (:name, :age, :sex)
          EOD;
      $stm = $pdo->prepare($sql);
      $stm->bindValue(':name', $name, PDO::PARAM_STR);
      $stm->bindValue(':age', $age, PDO::PARAM_INT);
      $stm->bindValue(':sex', $sex, PDO::PARAM_STR);
      $result = $stm->execute();
      if ($result) {
        $sql = "SELECT * FROM member";
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
      } else {
        echo '<span class="error">INSERT失敗</span>';
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