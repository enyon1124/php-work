<?php
// $data -- 文字列。配列には対応していない。
// 画面出力の時に使う
function h($data) {
  return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// $data -- 文字列、配列OK。
// ただしPHP7.2.0以降。
// true: 大丈夫。false: 危険(文字コード攻撃)
function cken($data) {
  return mb_check_encoding($data, 'UTF-8');
}
/*
// $data -- 文字列、配列OK。
// $_POSTを丸ごとHTMLエスケープするためのもの。
function es($data, $charset='UTF-8') {
  if (is_array($data)) {
    return array_map(__METHOD__, $data);
  } else {
    return htmlspecialchars($data, ENT_QUOTES, $charset);
  }
}
*/