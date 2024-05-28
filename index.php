<?php
$conn = mysqli_connect('localhost', 'root', '', 'joinDB');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 및 회원가입</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <button id="login">로그인</button>
    <button id="join">회원가입</button>

    <div class="login" id="loginModal">
        <h1>LOGIN</h1>
        <p><input type="text" name="login-id" id="login-pw" placeholder="id"></p>
        <p><input type="password" name="login-pw" id="login-pw" placeholder="password"></p>
    </div>
    <div class="join" id="joinModal">
        <h1>JOIN</h1>
        <p><input type="text" name="join-id" id="join-pw" placeholder="ID"></p>
        <p><input type="text" name="name" id="name" placeholder="Name"></p>
        <p><input type="password" name="join-pw" id="join-pw" placeholder="Password"></p>
        <p><input type="password" name="join-pw-check" id="join-pw-check" placeholder="Password Check"></p>
        <p>
            <input type="submit" value="회원가입">
            <input type="reset" value="취소">
        </p>
    </div>
    <script src="index.js"></script>
</body>
</html>