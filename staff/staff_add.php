<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ろくまる農園</title>
</head>
<body>
    <h1>スタッフ追加</h1>
    <br>
    <form method="post" action="staff_add_check.php">
        <label for="name">スタッフ名を入力</label><br>
        <input id="name" type="text" name="name" style="width: 200px;">
        <br>
        <label for="password">パスワードを入力</label><br>
        <input id="password" type="password" name="pass" style="width: 100px;">
        <br>
        <label for="password2">パスワードを入力(確認)</label><br>
        <input id="password2" type="password" name="pass2" style="width: 100px;">
        <br>
        <input type="button" value="戻る" onclick="history.back()">
        <input type="submit" name="submit" value="OK">
    </form>
    <script>
        window.onload = function(){
            document.getElementById("name").value = "";
            document.getElementById("form").value = "";
            document.getElementById("form").value = "";
        }
    </script>
</body>
</html>