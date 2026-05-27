 <!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
<title>確認画面</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>入力内容確認</h1>
  <?php
  // フォームから送信されたデータを取得
  if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $question = $_POST["question"];
  $gender = $_POST["gender"];
  $errors = [];

  // 入力内容のバリデーション
  if(!preg_match("/^[ぁ-んァ-ヶ一-龠a-zA-Z]+$/u", $name)){
    $errors[] = "名前はひらがな、カタカナ、漢字、英字のみで入力してください。";
  }
  if(!is_numeric($age) || $age < 0 || $age > 150){
    $errors[] = "年齢は0から150の間で入力してください。";
}
if(!preg_match("/^[0-9-]+$/", $phone)){
    $errors[] = "電話番号は半角数字とハイフンのみで入力してください。";
  }
  if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)){
    $errors[] = "メールアドレスの形式が正しくありません。";
  }
  if(!preg_match("/^[ぁ-んァ-ヶ一-龠a-zA-Z0-9-]+$/u", $address)){
    $errors[] = "住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみで入力してください。";
}
if(!empty($errors)){
    foreach($errors as $error){
        echo "<p style='color:red;'>{$error}</p>";
    }
    echo "<a href='form.php'>戻る</a>";
} else {
    echo "<p>名前：{$name}</p>";
    echo "<p>年齢：{$age}</p>";
    echo "<p>電話番号：{$phone}</p>";
    echo "<p>メールアドレス：{$email}</p>";
    echo "<p>住所：{$address}</p>";
    echo "<p>質問：{$question}</p>";
    echo "<p>性別：{$gender}</p>";
}
} else {
    echo "<p>データがありません</p>";
}
  ?>
</html>
