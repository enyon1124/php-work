<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>フォーム入力チェック</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div>

    <?php
    require_once("../lib/util.php");
    if (!cken($_POST)) {
      exit("Encoding Error! not UFT-8");
    }
    ?>
    <?php
    $errors = [];
    if (isset($_POST['zip'])) {
      $zip = trim($_POST['zip']);
      $pattern = "/^[0-9]{3}-[0-9]{4}$/";
      if (!preg_match($pattern, $zip)) {
        $errors[] = "郵便番号を正しく入力してください。";
      }
    } else {
      $errors[] = "郵便番号を正しく入力してください。";
    }
    ?>

    <?php
    if (count($errors) > 0) {
      echo '<ol class="error">';
      foreach ($errors as $value) {
        echo "<li>", $value, "</li>";
      }
      echo "</ol>";
    } else {
      echo "郵便番号は{$zip}です。";
    }
    ?>

  </div>

</body>

</html>