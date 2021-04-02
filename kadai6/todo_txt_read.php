<?php
$str ='';
$file = fopen('data/todo.txt', 'r');//aとか用途によって分ける
flock($file, LOCK_EX);
if ($file) {
  while ($line = fgets($file)) { // fgets()で1行ずつ取得→$lineに格納
  $str .="<tr><td>{$line}</td></tr>"; // 取得したデータを$strに入れる }
  }
}
flock($file, LOCK_UN);
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>textファイル書き込み型todoリスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>textファイル書き込み型todoリスト（一覧画面）</legend>
    <a href="todo_txt_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>todo</th>
        </tr>
      </thead>
      <tbody>
      <?=$str?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>