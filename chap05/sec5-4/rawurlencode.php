<?php
$page = "PHP 8 サンプル.html";
$path = rawurlencode($page);
$url = "http://localhost:3000/sec5-4/{$path}";
?>
<p><a href="<?php echo $url; ?>">PHP 8 サンプル</a></p>