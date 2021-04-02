<?php
//var_dump($_POST);
//exit();

$str ='';
$file = fopen('data/data.csv', 'a');//aとか用途によって分ける
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
<title>コンディショニングリスト</title>
</head>

<body>
<fieldset>
<legend>入力データリスト</legend>
    <a href="weight_input.php">入力データ</a>
    <table>
    <thead>
    <tr>
    <th>集計データ集</th>
    </tr>
    </thead>
    <tbody>
    <?=$str?>
    </tbody>
    </table>
</fieldset>
</body>

</html>