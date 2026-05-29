<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
<title>フォーム入力</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>フォーム入力</h1>
<form action="confirm.php" method="post">
    <label for="name">名前：</label>
    <input type="text" id="name" name="name">
    <label for="age">年齢：</label>
    <input type="text" id="age" name="age">
    <label for="phone">電話番号：</label>
    <input type="text" id="phone" name="phone">
    <label for="email">メールアドレス：</label>
    <input type="text" id="email" name="email">
    <label for="address">住所：</label>
    <input type="text" id="address" name="address">
    <label for="question">質問：</label>
    <textarea id="question" name="question"></textarea>
    <label for="gender">性別：</label>
    <select id="gender" name="gender">
        <option value="male">男性</option>
        <option value="female">女性</option>
    </select>
    <input type="submit" value="送信">
</form>
</body>
</html>
